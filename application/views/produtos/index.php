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
<?php if($this->session->userdata("usuario_logado")): ?>
        <h1>Produtos</h1>

        <table class="table">

<?php   foreach($produtos as $produto):     ?>
            <tr>
                <td><?= anchor("produtos/{$produto['id']}", $produto["nome"])?> </td>
                <td> <?= character_limiter(html_escape($produto["descricao"]),10) ?></td>
                <td> <?= numeroEmReais( $produto["preco"]) ?></td>
                <td> <?= anchor("produtos/remove/{$produto['id']}", "Remover", array("class"=>"btn btn-primary"))?></a><td>
            </tr>
<?php   endforeach   ?>
        </table>
        <br>


        <?= anchor('produtos/formulario', 'Novo Produto', array("class"=>"btn btn-primary"))?>
        <?= anchor('login/logout', 'Logout', array("class"=>"btn btn-primary"))?>
<?php else : ?>
        <h1>Login</h1>
        <?php
            echo form_open("login/autenticar");
            labelInput("Email", "email", "255", "email");
            labelPassword("Senha", "senha", "255");
            buttonSubmit("Login");
            echo form_close();
        ?>
        <br>
        <h1>Cadastro</h1>
        <?php 
            echo form_open("usuarios/novo");
            labelInput("Nome", "nome", "255", "text");
            labelInput("Email", "email", "255", "email");
            labelPassword("Senha", "senha", "255");
            buttonSubmit("Cadastrar");
            echo form_close();
        ?>
        
<?php endif ?>
    </div>
</body>
</html>


