<?php

class Usuarios_model extends CI_Model{

    public function salva($usuario){
        $this->db->insert("usuarios", $usuario);
        
    }



    public function buscaEmailSenha($email, $senha){
        /*$this->db->where("email", $email);
        $this->db->where("password", $senha);*/

        $this->db->where(
            array("email" => $email, "password"=>$senha)
        );


        $usuario = $this->db->get("usuarios")->row_array();
        return $usuario;
    }


    public function buscaVendedor($id_usuario){
        $this->db->where("id",$id_usuario);
        return $this->db->get("usuarios")->row_array();
    }

}

?>