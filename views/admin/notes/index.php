<?php
require_once __DIR__. '../../../../config/config.php';

$title = 'List Notes';
$isBack = true;
$additional_css = [
    '/assets/css/admin/index.css',
];
include_once TEMPLATES_PATH . '/auth/header.php';
?>

<section class="index-user">
    <div class="wrapper">
        <div class="list-notes">
            <h5>List Notes</h5>
            <div class="notes-container">
                <img src="<?= BASE_URL . '/assets/images/thumbnail-admin.png' ?>" alt="">
                <div class="notes-detail">
                    <h4>Lorem ipsum dolor sit, amet consectetur adipisicing</h4>
                </div>
                <a href="<?= BASE_URL . '/views/admin/notes/detail.php' ?>" class="btn-outline btn-icon">
                    <img src="<?= BASE_URL . '/assets/images/icons/visibility.svg' ?>" alt="">
                </a>
            </div>
            <div class="notes-container">
                <img src="<?= BASE_URL . '/assets/images/thumbnail-admin.png' ?>" alt="">
                <div class="notes-detail">
                    <h4>Lorem ipsum dolor sit, amet consectetur adipisicing</h4>
                </div>
                <a href="<?= BASE_URL . '/views/admin/notes/detail.php' ?>" class="btn-outline btn-icon">
                    <img src="<?= BASE_URL . '/assets/images/icons/visibility.svg' ?>" alt="">
                </a>
            </div>
            <div class="notes-container">
                <img src="<?= BASE_URL . '/assets/images/thumbnail-admin.png' ?>" alt="">
                <div class="notes-detail">
                    <h4>Lorem ipsum dolor sit, amet consectetur adipisicing</h4>
                </div>
                <a href="<?= BASE_URL . '/views/admin/notes/detail.php' ?>" class="btn-outline btn-icon">
                    <img src="<?= BASE_URL . '/assets/images/icons/visibility.svg' ?>" alt="">
                </a>
            </div>
            <div class="notes-container">
                <img src="<?= BASE_URL . '/assets/images/thumbnail-admin.png' ?>" alt="">
                <div class="notes-detail">
                    <h4>Lorem ipsum dolor sit, amet consectetur adipisicing</h4>
                </div>
                <a href="<?= BASE_URL . '/views/admin/notes/detail.php' ?>" class="btn-outline btn-icon">
                    <img src="<?= BASE_URL . '/assets/images/icons/visibility.svg' ?>" alt="">
                </a>
            </div>
        </div>
    </div>  
</section>

<?php
include_once TEMPLATES_PATH. '/no_auth/footer.php';
?>
