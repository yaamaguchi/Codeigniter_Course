<?php

class Produtos_model extends CI_Model{

    public function getAll(){
        $this->db->order_by("id", "ASC");
        $this->db->where("vendido", false);
        return $this->db->get("produtos")->result_array();
    }


    public function salva($produto){
        $this->db->insert("produtos", $produto);
    }

    public function remove($produto){
        return $this->db->delete("produtos", array("id"=>$produto["id"], "usuario_id" => $produto["usuario_id"]));
    }


    public function mostra($produto){
        return $this->db->get_where("produtos", array("id"=> $produto))->row_array();
    }



    public function buscaVendidos($usuario){
        
        $this->db->select("produtos.*, vendas.data_entrega");
        $this->db->from("produtos");
        $this->db->join("vendas", "vendas.produto_id = produtos.id");
        $this->db->order_by("produtos.id", "ASC");
        $this->db->where("vendido", true);
        $this->db->where("usuario_id", $usuario["id"]);
        /*return $this->db->get_where( 
            array(
                "produtos.vendido" => "1",
                "produtos.usuario_id" => $usuario["id"]
            )
        )->result_array();*/

        return $this->db->get()->result_array();
    }
}

?>