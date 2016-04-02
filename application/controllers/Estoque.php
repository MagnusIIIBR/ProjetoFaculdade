<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estoque extends CI_Controller {

    public function index()
    {
        //        echo  "oi";
        $this->load->view('estoque/index');
    }

    public function editar()
    {
        $this->load->view('estoque/editar');
    }
}