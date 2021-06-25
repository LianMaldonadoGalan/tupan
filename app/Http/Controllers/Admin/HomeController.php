<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    Public function index(){
        $producto = Producto::all();
        return view('admin.index', compact('producto'));
    }
}
