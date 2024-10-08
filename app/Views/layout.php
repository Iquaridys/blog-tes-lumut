<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->renderSection('title') ?></title>
    <link href="<?php echo base_url(); ?>/theme/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>/theme/site.css" rel="stylesheet"></head>
<body>
<div class="wrap">
    <?= $this->include('partials/nav') ?>
    <div class="container">
        <div class="site-index">
            <div class="body-content">
                <?= $this->renderSection('content') ?>
            </div>
        </div>
    </div>
</div>
<?= $this->include('partials/footer') ?>
<script src="<?php echo base_url(); ?>/theme/jquery.js"></script>
<script src="<?php echo base_url(); ?>/theme/bootstrap.js"></script></body>
</html>