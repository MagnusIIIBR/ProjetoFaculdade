<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marca extends CI_Controller {

    public function index()
    {
//        echo  "oi";
      $this->load->view('marca/index');
    }

    public function editar()
    {
        $this->load->view('marca/editar');
    }
}