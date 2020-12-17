<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use Illuminate\Routing\Controller;

class ProductoController extends Controller
{
    public function show (){

        $datoProducto = producto::all();
        return view('productos',compact('datoProducto'));
     }
 
}
