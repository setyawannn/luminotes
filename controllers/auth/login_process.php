<?php
session_start();

// Cek jika sudah login
if (isset($_SESSION['user_id'])) {
    header("Location: ../../index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Include model
    require_once __DIR__ . '/../../models/User.php';
    
    $user = new User();
    
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    $errors = [];
    
    if (empty($email)) {
        $errors[] = "Email tidak boleh kosong";
    }
    
    if (empty($password)) {
        $errors[] = "Password tidak boleh kosong";
    }
    
    if (empty($errors)) {
        if ($user->login($email, $password)) {
            $_SESSION['user_id'] = $user->id;
            $_SESSION['user_name'] = $user->name;
            $_SESSION['user_email'] = $user->email;
            $_SESSION['user_role'] = $user->role;
            
            if ($user->role === 'admin') {
                header("Location: ../../views/admin/dashboard.php");
            } else {
                header("Location: ../../views/user/dashboard.php");
            }
            exit;
        } else {
            $_SESSION['login_error'] = "Email atau password salah!";
            header("Location: ../../views/auth/login.php");
            exit;
        }
    } else {
        $_SESSION['login_error'] = implode("<br>", $errors);
        header("Location: ../../views/auth/login.php");
        exit;
    }
} else {
    header("Location: ../../views/auth/login.php");
    exit;
}