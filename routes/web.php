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

use App\Http\Controllers\EventsController;
Route::get('/', [EventsController::class, 'index']);

Route::get('/Busca', function () {
    return view('Busca');
});

Route::get('/Cadastro', function () {
    return view('Cadastro');
});

Route::get('/Carrinho', function () {
    return view('Carrinho');
});

Route::get('/Contato', function () {
    return view('Contato');
});

Route::get('/Listadeprodutos', function () {
    return view('Listadeprodutos');
});

Route::get('/Orçamento', function () {
    return view('Orçamento');
});

Route::get('/Login', function () {
    return view('Login');
});

Route::get('/Produto', function () {
    return view('Produto');
});

Route::get('/Quem Somos', function () {
    return view('Quem Somos');
});

Route::get('/SKY', function () {
    return view('SKY');
});