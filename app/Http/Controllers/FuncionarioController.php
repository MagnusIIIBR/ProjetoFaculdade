<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FuncionarioController extends Controller
{
    public function index()
    {
        return view('Funcionario.Index');
    }
    public function editar()
    {
        return view('Funcionario.Editar');
    }
}
