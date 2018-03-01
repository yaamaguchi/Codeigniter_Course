<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

class Teste extends CI_Controller{
    public function email(){

        
        $config["protocol"]    = "smtp";
        $config["smtp_host"]   = "ssl://smtp.googlemail.com";
        $config["smtp_user"]   = "maluco.mat@gmail.com";
        $config["smtp_pass"]   = "yamaguchi09";   
        //$config["smtp_crypto"] = "security";
        //$config["secure"]      = "ssl";
        $config["charset"]     = "utf-8";
        $config["mailtype"]    = "html";
        //$config["validate"]  = TRUE;
        //$config["newline"]   = "\r\n";
        //$config["crlf"]      = "\r\n";
        $config["smtp_port"]   = 465;

       /* $config = Array(
            'protocol' => 'email',
            'smtp_host' => 'smtp.gmail.com',
            'smtp_port' => 465,
            'smtp_crypto' => 'ssl',
            'smtp_user' => 'maluco.mat@gmail.com', // change it to yours
            'smtp_pass' => 'yamaguchi09', // change it to yours
            'mailtype' => 'html',
            'charset' => 'utf-8',
            'validate' => FALSE
            //'wordwrap' => TRUE
        );*/



       /* $config = array(        
            'protocol' => '',
            'smtp_host' => '',
            'smtp_port' => '',
            'smtp_user' => 'maluco.mat@gmail.com',
            'smtp_pass' => 'yamaguchi09'
        );*/

        $this->load->library("email" , $config);
        //$this->email->initialize($config);
        $this->email->set_newline("\r\n");

        $this->email->from("maluco.mat@gmail.com", "Mercado");
        $this->email->to("m-sy@live.com");
        $this->email->subject("TESTE email");
        //$this->email->message("Seu produto <b>{produto['nome']}</b> foi vendido!");


        $this->email->message("TESTE EMAIL");
        $this->email->send();

        //echo $this->email->print_debugger();
    }
}

?>