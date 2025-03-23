<?php
// session_start();

// $whitelist = [
//     'views/index.php',
//     'views/auth/login.php',
//     'views/auth/register.php'
// ];

// $requested_page = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
// $requested_page = str_replace('/luminotes/', '', $requested_page);

// if (in_array($requested_page, $whitelist)) {
//     header("Location: " . $requested_page);
//     exit;
// }

// if (!isset($_SESSION['user_id'])) {
    header("Location: views/index.php");
    exit;
// }

// if ($_SESSION['user_role'] === 'admin') {
//     header("Location: views/admin/dashboard.php");
// } else {
//     header("Location: views/user/dashboard.php");
// }
// exit;