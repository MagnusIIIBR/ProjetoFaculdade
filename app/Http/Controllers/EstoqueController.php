<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class EstoqueController extends Controller
{
    public function index()
    {
        return view('Estoque.Index');
    }
    public function editar()
    {
        return view('Estoque.Editar');
    }
}
