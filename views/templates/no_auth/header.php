<?php
require_once __DIR__ . '/../../../config/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LumiNotes</title>
    <link rel="stylesheet" href="<?= BASE_URL . '/assets/css/templates/no_auth.css' ?>">
    <?php if(isset($additional_css) && is_array($additional_css)): ?>
        <?php foreach($additional_css as $css): ?>
            <link rel="stylesheet" href="<?= BASE_URL . $css ?>">
        <?php endforeach; ?>
    <?php endif; ?>
</head>
<body>
    <?php if(isset($isBack) && $isBack): ?>
    <div class="container-set">
        <div class="back-button">
            <img src="<?= BASE_URL . '/assets/images/icons/arrow-back.svg' ?>" alt="Back" class="back-icon">
            <a href="javascript:history.back()" class="btn-back">
                Back
            </a>
        </div>
    <?php endif; ?>
