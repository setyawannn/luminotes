<?php
require_once __DIR__. '../../../../config/config.php';

$isBack = true; 
$title = 'Notes Preview';
$additional_css = [
    '/assets/css/user/index.css',
    '/assets/css/user/preview.css',
];
include_once TEMPLATES_PATH . '/auth/header.php';
?>

<section class="notes-preview">
    <div class="wrapper">
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Numquam, veritatis?</p>
        <div class="notes">
            <div class="notes-detail">
                <div class="notes-author">
                    <img src="<?= BASE_URL . '/assets/images/icons/person.svg' ?>" alt="">
                    <p>Author Name</p>
                </div>
                <div class="notes-typography">
                    <h2>Lorem ipsum dolor sit amet consectetur ipsum possimus </h2>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing </p>
                </div>
            </div>
            <div class="notes-thumbnail">
                <img src="<?= BASE_URL . '/assets/images/thumbnail.png' ?>" alt="">
                <p class="badge badge-outline">Topic</p>
            </div>
        </div>
        <div class="form-group">
            <label for="">Thumbnail</label>
            <input type="file" class="form-control">
            
            <div class="label-with-icon">
                <label for="">File Preview</label>
                <a href="<?= BASE_URL . '/views/user/profile.php' ?>" class="btn-icon btn-outline">
                    <img src="<?= BASE_URL . '/assets/images/icons/download.svg' ?>" alt="">
                </a>
            </div>

            <img src="<?= BASE_URL . '/assets/images/file-preview.png' ?>" alt="">
            
        </div>
        
        <div class="footer-button">
            <a href="<?= BASE_URL. '/views/user/notes/preview.php'?>" class="btn btn-primary">Publish</a>
        </div>
    </div> 
</section>

<?php
include_once TEMPLATES_PATH. '/no_auth/footer.php';
?>
