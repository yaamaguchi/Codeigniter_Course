<?php if($this->session->userdata("usuario_logado")): ?>
        <h1>Produtos</h1>

        <table class="table">

<?php   foreach($produtos as $produto):     ?>
            <tr>
                <td><?= anchor("produtos/{$produto['id']}", $produto["nome"])?> </td>
                <td> <?= character_limiter(html_escape($produto["descricao"]),10) ?></td>
                <td> <?= numeroEmReais( $produto["preco"]) ?></td>
                <td> <?= anchor("produtos/remove/{$produto['id']}", "Remover", array("class"=>"btn btn-primary"))?><td>
            </tr>
<?php   endforeach   ?>
        </table>
        <br>


        <?= anchor('produtos/formulario', 'Novo Produto', array("class"=>"btn btn-primary"))?>
        <?= anchor('vendas/', 'Produtos vendidos', array("class"=>"btn btn-primary"))?>
        <?= anchor('login/logout', 'Logout', array("class"=>"btn btn-primary"))?>
        <?= anchor('teste/email', 'Email Teste', array("class" => "btn btn-primary"))?>
        
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
 


