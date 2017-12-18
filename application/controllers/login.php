<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller{

    public function autenticar(){
        $this->load->model("usuarios_model");

        $email = $this->input->post("email");
        $senha = md5($this->input->post("senha"));
        $usuario = $this->usuarios_model->buscaEmailSenha($email, $senha);

        if($usuario){
            $this->session->set_userdata(array("usuario_logado" => $usuario));
            $this->session->set_flashdata("success", "logado com sucesso");
        }else{
            $this->session->set_flashdata("fail", "Erro ao logar");
        }
        //$this->load->view("login/autenticar", $dados);
        redirect('/');
    }


    public function logout(){
        $this->session->unset_userdata("usuario_logado");
        $this->session->set_flashdata("success", "deslogado com sucesso!");
        redirect('/');

        //$this->load->view("login/logout");
    }
}


?>