<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ClienteController extends Controller
{
    public function index()
    {
        return view('Cliente.Index');
    }
    public function editar()
    {
        return view('Cliente.Editar');
    }
}
