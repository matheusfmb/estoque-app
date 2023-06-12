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
    return view ('home');
});

Route::get('/home', function () {
    return view ('home_app');
});

Route::get('/login', function () {
    return view ('login');
});

Route::get('/produtos', 'App\Http\Controllers\ProdutoController@lista');

Route::get('/produtos/novo', function () {
    return view ('produtos/cadastro_produtos');
});

Route::post('/produtos/adiciona', 'App\Http\Controllers\ProdutoController@cadastrarProduto');


// ROTAS DA FUNCIONALIDADE DE DETALHES. NÃO É MAIS NECESSÁRIO
// // O ID É OBRIGATÓRIO NA ROTA.
// Route::get('/produtos/mostra/{id}', 'App\Http\Controllers\ProdutoController@mostra')-> where('id','[0-9]+');

// O ID NÃO É OBRIGATÓRIO.
// Route::get('/produtos/mostra/{id?}', 'App\Http\Controllers\ProdutoController@mostra');
