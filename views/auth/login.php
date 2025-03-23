<?php
require_once __DIR__. '../../../config/config.php';

$isBack = true;
$additional_css = [
    '/assets/css/auth/login.css',
];
include_once TEMPLATES_PATH . '/no_auth/header.php';
?>

<section class="login-page">
    <div class="wrapper">
        <div class="title">
            <h2>Sign In</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem numquam inventore officia</p>
        </div>
        <div class="login-input">
            <input type="text" placeholder="Email" class="form-control">
            <input type="password" placeholder="Password" class="form-control">
            <a class="forgot-pass" href="#">Forgot Password?</a>
        </div>
        
        <div class="button-login">
            <a href="<?= BASE_URL . '/views/user/index.php' ?>" class="btn btn-outline">Sign In</a>
            <p>Dont have an account? <a href="<?= BASE_URL . '/views/auth/register.php' ?>">Sign Up</a></p>
        </div>
    
    </div>  
</section>

<?php
include_once TEMPLATES_PATH. '/no_auth/footer.php';
?>
