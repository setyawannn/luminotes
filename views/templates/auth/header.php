<?php
require_once __DIR__ . '/../../../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LumiNotes</title>
    <link rel="stylesheet" href="<?= BASE_URL . '/assets/css/templates/auth.css' ?>">
    <?php if(isset($additional_css) && is_array($additional_css)): ?>
        <?php foreach($additional_css as $css): ?>
            <link rel="stylesheet" href="<?= BASE_URL . $css ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <div class="container-set">
        <div class="navigation">
            <div class="back-button">
                <?php if(isset($isBack) && $isBack): ?>
                    <img src="<?= BASE_URL . '/assets/images/icons/arrow-back.svg' ?>" alt="Back" class="back-icon">
                    <a href="javascript:void(0)" onclick="window.history.back()" class="<?= isset($isDetail) ? 'btn-back' : 'btn-back-h' ?>">
                        <?= isset($title) ? $title : 'Back' ?>
                    </a>
                <?php else: ?>
                    <h1><?= $title ?? '' ?></h1>
                <?php endif; ?>
            </div>
            <div>
                <a href="<?= BASE_URL . '/views/user/profile.php' ?>" class="btn-icon btn-outline">
                    <img src="<?= BASE_URL . '/assets/images/icons/person.svg' ?>" alt="">
                </a>
            </div>
        </div>
