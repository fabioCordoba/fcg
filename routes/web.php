<?php

use Illuminate\Support\Facades\Route;
use App\Models\Products;
use App\Models\Orden;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['role:ROOT|ADMINISTRADOR']], function () {
    Route::middleware(['auth:sanctum', 'verified'])->get('/users', function () {
        return view('users');
    })->name('users');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/product', function () {
    return view('product');
})->name('product');

Route::middleware(['auth:sanctum', 'verified'])->get('/pedidos', function () {
    return view('pedidos');
})->name('pedidos');

Route::middleware(['auth:sanctum', 'verified'])->get('/pay/{orden}/cant/{cant}', function (Products $orden, $cant) {
    return view('pay',compact('orden','cant'));
})->name('pay');

Route::middleware(['auth:sanctum', 'verified'])->get('/carrito/{orden}', function (Orden $orden) {
    return view('carrito',compact('orden'));
})->name('carrito');


