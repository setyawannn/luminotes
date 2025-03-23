<?php
require_once __DIR__. '../../../../../config/config.php';

$isBack = true;
$title = 'Teams Detail';
$additional_css = [
    '/assets/css/user/profile/teams.css',
    '/assets/css/user/profile/teams/detail.css',
];
include_once TEMPLATES_PATH . '/auth/header.php';
?>

<section class="index-user">
    <div class="wrapper">
       <div class="description">
        <h3>Lorem ipsum dolor sit amet consectetur adipisicing</h3>
       </div>
        <div class="join-code">
            <input type="text" placeholder="Team Code" class="form-control">
            <button type="button" class="btn btn-outline">Copy</button>
        </div>
        <div class="description-p">
            Lorem ipsum dolor sit amet consectetur, adipisicing elit. Voluptatem eum odio laudantium eaque alias fuga quam illo atque provident tempora!
        </div>
        <div class="team-members">
            <h5>Team Leader</h5>
            <div class="team-members-detail">
                <img src="<?= BASE_URL . '/assets/images/icons/person.svg' ?>" alt="">
                <p>Leader Name</p>
            </div>
        </div>
        <div class="team-members">
            <h5>Team Leader</h5>
            <div class="team-members-detail">
                <img src="<?= BASE_URL . '/assets/images/icons/person.svg' ?>" alt="">
                <p>Member Name</p>
            </div>
            <div class="team-members-detail">
                <img src="<?= BASE_URL . '/assets/images/icons/person.svg' ?>" alt="">
                <p>Member Name</p>
            </div>
            <div class="team-members-detail">
                <img src="<?= BASE_URL . '/assets/images/icons/person.svg' ?>" alt="">
                <p>Member Name</p>
            </div>
            <div class="team-members-detail">
                <img src="<?= BASE_URL . '/assets/images/icons/person.svg' ?>" alt="">
                <p>Member Name</p>
            </div>
        </div>
    </div>
</section>

<?php
include_once TEMPLATES_PATH. '/no_auth/footer.php';
?>
