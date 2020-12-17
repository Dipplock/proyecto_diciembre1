<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\producto;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Log;

class ProductoController extends Controller
{
    public function show (){
        Log::channel('slack')->info('[ProductoController] show()');
        $datoProducto = producto::all();
        return view('productos',compact('datoProducto'));
     }
 
}
