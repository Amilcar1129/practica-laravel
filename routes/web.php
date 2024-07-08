<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

// Definir las rutas para el CRUD de productos
Route::resource('products', ProductController::class);

