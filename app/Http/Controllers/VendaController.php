<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class VendaController extends Controller
{
    public function index()
    {
        return view('Venda.Index');
    }
    public function editar()
    {
        return view('Venda.Editar');
    }
}
