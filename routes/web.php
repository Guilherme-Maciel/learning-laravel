<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

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

//Irá uilizar o controller e a rota index
Route::get('/', [EventController::class, 'index']);
Route::get('/events/create', [EventController::class, 'create']);


Route::get('/contact', function () {
    return view('contact');
});

//Parâmetros do Laravel
Route::get('/product/{id}', function ($id = 1) {
    return view('product', ['id' => $id]);
});

//Parâmetros de URL
Route::get('/products', function () {
    $busca = request('search');

    return view('products', ['busca' => $busca]);
});
