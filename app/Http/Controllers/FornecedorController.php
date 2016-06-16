<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FornecedorController extends Controller
{
    public function index()
    {
        return view('Fornecedor.Index');
    }
    public function editar()
    {
        return view('Fornecedor.Editar');
    }
}
