<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class JsonController extends Controller
{
    public function jsonproductos(){
        $productos = Producto::all();
        
        return response()->json($productos,200);
    }
}
