<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function create(Request $request)
    {
        $request-> validate([
            'fecha' => 'required',
            'nombreProducto' => 'required',
            'nombreCliente' => 'required',
            'nombreEmpleado' => 'required',
            'cantidad'=>'required'
    
            ]);

            $pedido_nuevo = new App\pedido;

            $pedido_nuevo -> fecha = $request ->fecha;
            $pedido_nuevo -> nombreProducto = $request ->nombreProducto;
            $pedido_nuevo -> nombreCliente = $request ->nombreEmpleado;
            $pedido_nuevo -> cantidad = $request ->cantidad;
            $pedido_nuevo -> save();
    }
       
       
 }
    
