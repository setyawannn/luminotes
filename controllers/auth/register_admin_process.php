<?php
session_start();

// Cek jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include model
    require_once __DIR__ . '/../../models/User.php';
    
    // Inisialisasi User model
    $user = new User();
    
    // Ambil data dari form
    $name = trim($_POST['admin_name']);
    $email = trim($_POST['admin_email']);
    $password = $_POST['admin_password'];
    $password_confirm = $_POST['admin_password_confirm'];
    
    // Simpan input untuk dikembalikan jika ada error
    $_SESSION['prev_admin_name'] = $name;
    $_SESSION['prev_admin_email'] = $email;
    
    // Validasi input
    $errors = [];
    
    // Validasi nama
    if (empty($name)) {
        $errors[] = "Nama tidak boleh kosong";
    } elseif (strlen($name) < 3) {
        $errors[] = "Nama minimal 3 karakter";
    }
    
    // Validasi email
    if (empty($email)) {
        $errors[] = "Email tidak boleh kosong";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid";
    } elseif ($user->emailExists($email)) {
        $errors[] = "Email sudah terdaftar";
    }
    
    // Validasi password
    if (empty($password)) {
        $errors[] = "Password tidak boleh kosong";
    } elseif (strlen($password) < 8) {
        $errors[] = "Password minimal 8 karakter";
    } elseif (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/', $password)) {
        $errors[] = "Password harus mengandung huruf besar, huruf kecil, dan angka";
    }
    
    // Validasi konfirmasi password
    if ($password !== $password_confirm) {
        $errors[] = "Konfirmasi password tidak sesuai";
    }
    
    // Jika tidak ada error
    if (empty($errors)) {
        // Hash password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // Set properti user
        $user->name = $name;
        $user->email = $email;
        $user->password = $hashed_password;
        $user->role = 'admin'; // Set role sebagai admin
        
        // Coba register admin
        if ($user->create()) {
            // Hapus session input sebelumnya
            unset($_SESSION['prev_admin_name']);
            unset($_SESSION['prev_admin_email']);
            
            // Set success message
            $_SESSION['register_success'] = "Akun admin berhasil dibuat";
            header("Location: ../../views/auth/register_admin.php?success=1");
            exit;
        } else {
            $_SESSION['register_error'] = "Gagal mendaftarkan akun admin. Silakan coba lagi.";
            header("Location: ../../views/auth/register_admin.php");
            exit;
        }
    } else {
        $_SESSION['register_error'] = implode("<br>", $errors);
        header("Location: ../../views/auth/register_admin.php");
        exit;
    }
} else {
    // Jika bukan POST method
    header("Location: ../../views/auth/register_admin.php");
    exit;
}