<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pedidoController extends Controller
{
    public function retornoPedido(){
        return view('pedidos');
    }
}
