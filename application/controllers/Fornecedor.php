<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Fornecedor extends CI_Controller {

    public function index()
    {
//        echo  "oi";
      $this->load->view('fornecedor/index');
    }

    public function editar()
    {
        $this->load->view('fornecedor/editar');
    }
}