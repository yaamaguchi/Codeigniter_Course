<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuarios extends CI_Controller{
    public function novo(){
        
        //$this->output->enable_profiler(TRUE);
        $usuario = array(
            "nome" => $this->input->post("nome"),
            "email" => $this->input->post("email"),
            "password" => md5($this->input->post("senha"))
        );
        $this->load->model("usuarios_model");
        $this->usuarios_model->salva($usuario);
        $this->session->set_flashdata("success", "Cadastro efetuado com sucesso!");
        redirect('/');
    }
}


?>