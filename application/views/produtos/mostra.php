
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
