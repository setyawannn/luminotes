<?php
require_once __DIR__ . '/../../config/config.php';
session_start();

// Hapus semua data session
$_SESSION = array();

// Hapus session cookie
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time() - 3600, '/');
}

// Destroy session
session_destroy();

// Redirect ke halaman login
header("Location: " . BASE_URL . "/views/auth/login.php");
exit;