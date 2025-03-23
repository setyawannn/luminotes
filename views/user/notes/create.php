<?php
require_once __DIR__. '../../../../config/config.php';

$isBack = true;  
$title = 'Create';
$additional_css = [
    '/assets/css/user/create.css',
];
include_once TEMPLATES_PATH . '/auth/header.php';
?>

<section class="index-user">
    <div class="wrapper">
        <div class="form-group">
            <div class="dragndrop">
                <h4>Select File</h4>
                <p>File supported only .pdf max 10MB</p>
                <button class="btn btn-primary">
                    Choose File
                </button>
            </div>
            <input type="text" placeholder="Title" class="form-control">
            <textarea name="" placeholder="Description" class="form-control"></textarea>
            <select name="" id="" class="form-control">
                <option value="">Topic</option>
                <option value="">Desain Basis Data</option>
                <option value="">Pemrograman SQL</option>
                <option value="">Pemrograman Lanjutan</option>
            </select>
            <select name="" id=""  class="form-control">
                <option value="">Publication</option>
                <option value="">Private</option>
                <option value="">Public</option>
            </select>
            <select name="" id=""  class="form-control">
                <option value="">Team</option>
                <option value="">Maju Tak Gentar</option>
                <option value="">Regu Tulip</option>
                <option value="">Harimau Laut</option>
            </select>
        </div>

        <div class="footer-button">
            <a href="<?= BASE_URL. '/views/user/notes/preview.php'?>" class="btn btn-primary">Preview</a>
        </div>
        
    </div> 
</section>

<?php
include_once TEMPLATES_PATH. '/no_auth/footer.php';
?>
