<?php

use Illuminate\Support\Facades\Route;

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
    $data = "Exemplo de dado retonado via GET";
    $var = "";
    $arr = [1,2,3,4,5];
    $nomes = ["João", "Matheus", "Guilherme", "Pedro", "Gustavo"];
    //Retornando dados via get
    return view('welcome', [
        'data' => $data, 
        'var' => $var,
        'arr' => $arr,
        'nomes' => $nomes]);
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/products', function () {
    return view('products');
});
