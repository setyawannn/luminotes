<?php
require_once __DIR__. '../../../../config/config.php';

$isBack = true;
$title = 'Profile';
$additional_css = [
    '/assets/css/user/profile/index.css',
    '/assets/css/user/index.css',
];
include_once TEMPLATES_PATH . '/auth/header.php';
?>

<section class="index-user">
    <div class="wrapper">
       <div class="profile">
            <img src="<?= BASE_URL . '/assets/images/profile.png' ?>" alt="Profile">
            <div class="profile-name">
                <h3>Author Name</h3>
                <p>Your bio goes here.</p>
            </div>
        </div>
        <div class="profile-button">
            <a href="<?= BASE_URL . '/views/user/profile' ?>" class="btn btn-outline">Edit Profile</a>
            <a href="<?= BASE_URL . '/views/user/profile/teams.php' ?>" class="btn btn-outline">Teams</a>
        </div>
        <div class="tablist">
            <ul>
                <li class="active">All</li>
                <li>Own</li>
                <li>Teams</li>
            </ul>
        </div>
        <div class="filter">
            <select name="" id="" class="form-control">
                <option value="">Status</option>
                <option value="check">Check</option>
                <option value="reject">Reject</option>
                <option value="approved">Approved</option>
            </select>
        </div>
        <div class="notes-list">
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
</section>

<?php
include_once TEMPLATES_PATH. '/no_auth/footer.php';
?>
