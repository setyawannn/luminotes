<?php
require_once __DIR__. '../../../config/config.php';

$title = 'Home';
$additional_css = [
    '/assets/css/user/index.css',
];
include_once TEMPLATES_PATH . '/auth/header.php';
?>

<section class="index-user">
    <div class="wrapper">
        <div class="filter">
            <button type="button" class="btn-icon btn-outline">
                <img src="<?= BASE_URL . '/assets/images/icons/tune.svg' ?>" alt="Filter">
            </button>
            <input type="text" placeholder="Search" class="form-control">
        </div>
        <div class="notes-content">
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
                    <div class="notes-footer">
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
                <div class="notes-thumbnail">
                    <img src="<?= BASE_URL . '/assets/images/thumbnail.png' ?>" alt="">
                    <p class="badge badge-outline">Topic</p>
                </div>
            </div>
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
                    <div class="notes-footer">
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
                <div class="notes-thumbnail">
                    <img src="<?= BASE_URL . '/assets/images/thumbnail.png' ?>" alt="">
                    <p class="badge badge-outline">Topic</p>
                </div>
            </div>
        </div>
    </div>  
    <a href="<?= BASE_URL . '/views/user/notes/create.php' ?>" class="floating-button btn-icon btn-outline">
        <img src="<?= BASE_URL . '/assets/images/icons/add.svg' ?>" alt="Add Note">
    </a>
</section>

<?php
include_once TEMPLATES_PATH. '/no_auth/footer.php';
?>
