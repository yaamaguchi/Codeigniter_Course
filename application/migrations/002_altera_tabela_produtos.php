<?php

class Migration_Altera_tabela_produtos extends CI_migration{

    public function up(){
        
        $this->dbforge->add_column('produtos', array(
                'vendido' => array(
                    'type' => 'boolean',
                    'default' => '0'
                )
            )
        );
    }

    public function down(){
        $this->dbforge->drop_column('produtos', 'vendido');
    }
}


?>