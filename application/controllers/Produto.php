<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produto extends CI_Controller {


    public function index()
    {
        //        echo  "oi";
        $this->load->view('produto/index');
    }

    public function editar()
    {
        $this->load->view('produto/editar');
    }
}