
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


