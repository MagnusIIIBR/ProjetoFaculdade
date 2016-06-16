<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProdutoController extends Controller
{
    public function index()
    {
        return view('Produto.Index');
    }
    public function editar()
    {
        return view('Produto.Editar');
    }
}
