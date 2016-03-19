<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


    public function index()
    {
        $this->load->view('login/index');
    }
    public function editar()
    {
        $this->load->view('login/index');
    }

    public function recuperarSenha()
    {
        $this->load->view('login/recuperarSenha');
    }


}