<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class TipoCalcadoController extends Controller
{
    public function index()
    {
        return view('TipoCalcado.Index');
    }
    public function editar()
    {
        return view('TipoCalcado.Editar');
    }
}
