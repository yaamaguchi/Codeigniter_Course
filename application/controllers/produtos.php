<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Produtos extends CI_Controller{
    public function index(){

        //$this->output->enable_profiler(TRUE);
        
        $this->load->model("produtos_model");

        $produtos = $this->produtos_model->getAll();          
        $dados = array("produtos"=> $produtos);
        $this->load->view("produtos/index.php", $dados);
    }

    public function formulario (){
       /* $usuario = $this->session->userdata("usuario_logado");
        if(! $usuario ) {
            $this->session->set_flashdata("fail", "Voce precisa estar logado!");
            redirect('/');
        }*/

        autoriza();

        $this->load->view("produtos/formulario");    
    }


    public function novo(){
        autoriza();
        $this->form_validation->set_rules("nome", "nome", "trim|required|min_length[5]|callback_nao_tenha_a_palavra_melhor");
        $this->form_validation->set_rules("descricao", "descricao", "trim|required|min_length[10]");
        $this->form_validation->set_rules("preco", "preco", "trim|required");
        $this->form_validation->set_error_delimiters("<p class='alert alert-danger'>", "</p>");

        
        $sucesso = $this->form_validation->run();
        if($sucesso){
            $usuario_logado = $this->session->userdata("usuario_logado");

            $produto = array(
                "nome" => $this->input->post("nome"),
                "preco" => $this->input->post("preco"),
                "descricao" => $this->input->post("descricao"), 
                "usuario_id" => $usuario_logado["id"]
            );
            $this->load->model("produtos_model");
            $this->produtos_model->salva($produto);
            $this->session->set_flashdata("success","Produto adicionado com sucesso!");    
            redirect('/');
        }else{
            $this->load->view("produtos/formulario");
        }
    }

    public function remove($id){
        autoriza();
        $usuario_logado = $this->session->userdata("usuario_logado");
        $produto = array(
            "usuario_id" => $usuario_logado["id"],
            "id" => $id
        );

        $this->load->model("produtos_model");
        $data = $this->produtos_model->remove($produto);
        var_dump($data);

        $this->session->set_flashdata("success", "Produto removido com sucesso!");
        redirect('/');
    }


    public function mostra($id){
        $this->load->model("produtos_model");
        $lista = $this->produtos_model->mostra($id);
        $dados = array("dados"=>$lista);

        $this->load->view("produtos/mostra", $dados);
    }



    public function nao_tenha_a_palavra_melhor($nome){
        $posicao = strpos($nome, "melhor");

        if($posicao === FALSE ){
            return true;
        }else{
            $this->form_validation->set_message("nao_tenha_a_palavra_melhor","O campo '%s' não pode conter a palavra melhor!");
            return false;
        }
    }
}

?>  