<?php
require_once __DIR__. '../../../../config/config.php';

$isBack = true;
$isDetail = true;
$additional_css = [
    '/assets/css/admin/notes/detail.css',
    '/assets/css/user/preview.css',
];
include_once TEMPLATES_PATH . '/auth/header.php';
?>

<section class="index-user">
    <div class="wrapper">
        <h2>Lorem ipsum dolor sit amet consectetur magnam perferendis.</h2>
        <div class="header-note">
            <div class="header-note-left">
                <div class="author-detail">
                    <img src="<?= BASE_URL . '/assets/images/icons/person.svg' ?>" alt="">
                    <p>Author</p>
                </div>
                <div class="note-details">
                    <div class="rate">
                        <img src="<?= BASE_URL . '/assets/images/icons/star-filled.svg' ?>" alt="">
                        <p>4.5</p>
                    </div>
                    <div class="date">
                        <img src="<?= BASE_URL . '/assets/images/icons/calendar-today.svg' ?>" alt="">
                        <p>14 Jun 2025</p>
                    </div>
                </div>
            </div>
            <div class="header-note-right">
                <img src="<?= BASE_URL .  '/assets/images/icons/share.svg' ?>" alt="">
                <p class="badge badge-outline">Topic</p>
            </div>
        </div>
        <div class="thumbnail">
            <img src="<?= BASE_URL . '/assets/images/thumbnail-detail.png' ?>" alt="">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum, cupiditate?</p>
        </div>

        <div class="form-group">
            <div class="label-with-icon">
                <label for="">File Preview</label>
                <a href="<?= BASE_URL . '/views/user/profile.php' ?>" class="btn-icon btn-outline">
                    <img src="<?= BASE_URL . '/assets/images/icons/download.svg' ?>" alt="">
                </a>
            </div>

            <img src="<?= BASE_URL . '/assets/images/file-preview.png' ?>" alt="">
        </div>

        <div class="footer-button">
            <a href="<?= BASE_URL. '/views/user/notes/preview.php'?>" class="btn btn-primary">Desicion</a>
        </div>
    </div>  
</section>

<?php
include_once TEMPLATES_PATH. '/no_auth/footer.php';
?>
