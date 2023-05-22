<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/message', function () {
    return "<h2>🖐Hello, I'm using the laravel framework versión 10</h2>";
});

/* Ruta con parametro no opcional */
Route::get('/message/{name}', function ($name) {
    return "<h2>🖐Hello, I'm $name</h2>";
});

/* Ruta con parametro opcional */
Route::get('/message-v2/guest/{name?}', function ($name = "Visitante no identificado 🛸") {
    return "<h2>🖐Hello, I'm $name</h2>";
});

