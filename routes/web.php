<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;
use App\Models\Producto;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('producto', ProductoController::class);

Route::resource('newsuser', NewsletterController::class);

Route::get('/', function () {
    return view('index');
});

Route::get('blog', function () {
    $producto = Producto::all()->random(3);
    return view('blog',compact('producto'));
});

Route::get('nosotros', function () {
    return view('acerca');
})->middleware('verified');

Route::get('contacto', function () {
    return view('contacto');
});

Route::get('recetas', function () {
    $producto = Producto::all();
    return view('recetas' , compact('producto'));
});

Route::post('newsletter',  [NewsletterController::class, 'create']);

