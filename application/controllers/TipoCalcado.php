<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TipoCalcado extends CI_Controller {

    public function index()
    {
//        echo  "oi";
      $this->load->view('tipocalcado/index');
    }

    public function editar()
    {
        $this->load->view('tipocalcado/editar');
    }
}