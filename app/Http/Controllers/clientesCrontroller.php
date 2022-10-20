<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class clientesCrontroller extends Controller
{
    public function retornoClientes(){
        return view('clientes');
    }
}
