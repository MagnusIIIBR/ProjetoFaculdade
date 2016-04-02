<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Funcionario extends CI_Controller {

    public function index()
    {
        //        echo  "oi";
        $this->load->view('funcionario/index');
    }

    public function editar()
    {
        $this->load->view('funcionario/editar');
    }
}