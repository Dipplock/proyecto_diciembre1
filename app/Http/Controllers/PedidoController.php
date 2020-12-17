<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\pedido;

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

            $pedido_nuevo = new pedido;
            $pedido_nuevo -> fecha = $request ->fecha;
            $pedido_nuevo -> nombreProducto = $request ->nombreProducto;
            $pedido_nuevo -> nombreCliente = $request ->nombreEmpleado;
            $pedido_nuevo -> cantidad = $request ->cantidad;
            Log::debug('menasahe');
            $pedido_nuevo -> save();
            return back() -> with ('mensaje','Se ha agregado un nuevo pedido');

    }
       
       
 }
    
