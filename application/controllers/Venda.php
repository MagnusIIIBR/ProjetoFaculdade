<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Venda extends CI_Controller {

    public function index()
    {
        //        echo  "oi";
        $this->load->view('venda/index');
    }

    public function editar()
    {
        $this->load->view('venda/editar');
    }
}