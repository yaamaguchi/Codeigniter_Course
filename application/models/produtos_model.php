<?php

class Produtos_model extends CI_Model{

    public function getAll(){
        $this->db->order_by("id", "ASC");
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

}

?>