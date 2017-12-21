<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="<?= base_url("css/bootstrap.min.css") ?> ">
    <script src="<?= base_url("js/bootstrap.js")?>"></script>
    <script  src="<?= base_url("js/jquery-3.2.1.min.js") ?> "></script>
</head>
<body>
    <div class="container">
        <h1>Produtos vendidos:</h1>
        
        <table class="table">
            <?php foreach ($produtosVendidos as $produto): ?>
                <tr>
                    <td><?= anchor("produtos/{$produto['id']}", $produto["nome"])?> </td>
                    <td><?= dataMySQLToBr($produto["data_entrega"])?></td>
                </tr>
            <?php endforeach ?>
        </table>
        <?= anchor("/", "Voltar", array("class"=>"btn btn-primary"))?>
    </div>
</body>
</html>



