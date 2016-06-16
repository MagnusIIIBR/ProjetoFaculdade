<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CargoController extends Controller
{
    public function index()
    {
        return view('Cargo.Index');
    }
    public function editar()
    {
        return view('Cargo.Editar');
    }
}
