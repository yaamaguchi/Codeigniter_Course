<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.min.css") ?> ">
    <script src="<?= base_url("js/bootstrap.js")?>"></script>
    <script  src="<?= base_url("js/jquery-3.2.1.min.js") ?> "></script>
</head>
<body>
    <div class="container">
        <?php if ($this->session->flashdata("success")) : ?>
            <p class="alert alert-success"><?= $this->session->flashdata("success") ?> </p>    
        <?php endif ?>

        <?php if($this->session->flashdata("fail")) : ?>
                <p class="alert alert-danger"><?= $this->session->flashdata("fail") ?> </p>
        <?php endif?>