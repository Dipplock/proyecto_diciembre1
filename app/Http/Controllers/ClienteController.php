<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\cliente;

class ClienteController extends Controller
{
  
    public function show (){

       $datoClientes = cliente::all();
       return view('clientes',compact('datoClientes'));
    }


}
