<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\ProductoController;
use Illuminate\Support\Facades\Route;


Route::get('', [HomeController::class , 'index'])->name('admin.home');

Route::resource('productos', ProductoController::class)->names('admin.producto');