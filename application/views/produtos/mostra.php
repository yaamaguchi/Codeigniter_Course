
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.css") ?> "> 
    <script  src="<?= base_url("js/jquery-3.2.1.min.js") ?> "></script>
</head>
<body>
    <div class="container">
        <h1></h1>
        <h1><?= $dados["nome"]?></h1><br>
        Preço: <?= $dados["preco"]?><br>
        Descrições: 
        <?= auto_typography(html_escape($dados["descricao"])) ?><br>
        
        <?php if($dados["vendido"] == "0"): ?>
            <h2>Compre agora mesmo</h2>
            <?php
            echo form_open("vendas/nova");
            labelHidden("produto_id", $dados["id"]);
            labelInput("Data de Entrega","data_de_entrega","255", "text");
            buttonSubmit("Comprar");
            echo form_close();
            ?>
        <?php endif ?>
        <?= anchor("/", "Voltar", array("class"=> "btn btn-primary"));?>
    </div>
</body>
</html>