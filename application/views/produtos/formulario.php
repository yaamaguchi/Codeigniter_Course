

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?> ">
</head>
<body>
    <div class="container">
        <h1>Cadastro de novo Produto</h1>
        <!--<?= validation_errors("<p class='alert alert-danger'>", "</p>") ?>-->
<?php
    
    echo form_open("produtos/novo");
    labelInput("Nome","nome","255", "text");
    echo form_error("nome");

    labelInput("Preço","preco","255", "number");
    echo form_error("preco");

    labelTextArea("Descrição", "descricao");
    echo form_error("descricao");

    buttonSubmit("Cadastrar Produto");
    echo form_close();

?>
    </div>
</body>
</html>