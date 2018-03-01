
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
    echo anchor("/", "Voltar",array("class"=>"btn btn-primary"));
    echo form_close();

?>