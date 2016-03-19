<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cliente extends CI_Controller {

    public function index()
    {
        echo  "oi";
//        $this->load->view('cliente/index');
    }

    public function editar()
    {
        $this->load->view('cliente/editar');
    }
}