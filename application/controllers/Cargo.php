<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cargo extends CI_Controller {

    public function index()
    {
//        echo  "oi";
      $this->load->view('cargo/index');
    }

    public function editar()
    {
        $this->load->view('cargo/editar');
    }
}