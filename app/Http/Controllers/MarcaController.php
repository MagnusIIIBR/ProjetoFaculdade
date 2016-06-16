<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MarcaController extends Controller
{
    public function index()
    {
        return view('Marca.Index');
    }
    public function editar()
    {
        return view('Marca.Editar');
    }
}
