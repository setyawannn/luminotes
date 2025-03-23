<?php
require_once __DIR__. '../../config/config.php';

include_once TEMPLATES_PATH . '/no_auth/header.php';
?>

<section class="get-started">
    <img src="<?= BASE_URL . '/assets/images/no_auth/get-started.png' ?>" class="get-started-img" alt="">
    <div class="wrapper">
        <div class="container-started">
            <h2>Lets Get Started</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Voluptatem numquam inventore officia consequuntur fugiat vitae illo, modi beatae optio alias!</p>
        </div>
        <div class="button-wrapper">
            <a href="<?= BASE_URL . '/views/auth/login.php' ?>" class="btn btn-outline">Sign In</a>
        </div> 
    </div>  
</section>

<?php
include_once TEMPLATES_PATH. '/no_auth/footer.php';
?>
