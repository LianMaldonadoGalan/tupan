<?php

use App\Http\Controllers\api\JsonController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();

    return redirect('/');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('producto', ProductoController::class);

Route::resource('newsletter', NewsletterController::class);

Route::get('/', function () {
    $producto = Producto::all();
    $productorandom = Producto::all()->random(3);
    return view('index',compact('producto'),compact('productorandom'));
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




Route::get('jsonproductos', [JsonController::class, 'jsonproductos']);

