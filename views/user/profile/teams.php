<?php
require_once __DIR__. '../../../../config/config.php';

$isBack = true;
$isBtnDetail = true;
$customBtnDetail = '/assets/images/icons/add.svg';
$title = 'Teams';
$additional_css = [
    '/assets/css/user/profile/index.css',
    '/assets/css/user/profile/teams.css',
];
include_once TEMPLATES_PATH . '/auth/header.php';
?>

<section class="index-user">
    <div class="wrapper">
        <div class="tablist">
            <ul>
                <li class="active">All</li>
                <li>Own</li>
                <li>Teams</li>
            </ul>
        </div>
        <div class="join-code">
            <input type="text" placeholder="Team Code" class="form-control">
            <button type="button" class="btn btn-outline">Join</button>
        </div>
        <div class="teamlist">
            <a href="<?= BASE_URL . '/views/user/profile/teams/detail.php' ?>" class="teamlist-container">
                <h4>Team Name</h4>
            </a>
            <a href="<?= BASE_URL . '/views/user/profile/teams/detail.php' ?>" class="teamlist-container">
                <h4>Team Name</h4>
            </a>
            <a href="<?= BASE_URL . '/views/user/profile/teams/detail.php' ?>" class="teamlist-container">
                <h4>Team Name</h4>
            </a>
            <a href="<?= BASE_URL . '/views/user/profile/teams/detail.php' ?>" class="teamlist-container">
                <h4>Team Name</h4>
            </a>
            <a href="<?= BASE_URL . '/views/user/profile/teams/detail.php' ?>" class="teamlist-container">
                <h4>Team Name</h4>
            </a>
            <a href="<?= BASE_URL . '/views/user/profile/teams/detail.php' ?>" class="teamlist-container">
                <h4>Team Name</h4>
            </a>
        </div>
    </div>
</section>

<?php
include_once TEMPLATES_PATH. '/no_auth/footer.php';
?>
