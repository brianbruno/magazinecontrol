<?php

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
    if(Auth::check()){
        return view('home/index');
    }else{
        return view('index');
    }
})->name('index');

Auth::routes();

Route::resource('produtos', 'ProdutoController');

Route::get('/home', function () {
    return view('home/index');
})->middleware('auth')->name('home');

Route::prefix('vendas')->group(function () {
    Route::get('/', function () {
        return view('gestao/vendas/index');
    }, ['nomeTela' => 'Vendas'])->middleware('auth')->name('vendas');

    Route::get('/produtos', function () {
        return view('gestao/vendas/produtos');
    }, ['nomeTela' => 'Produtos'])->middleware('auth')->name('produtos');
});



