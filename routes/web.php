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

Route::get('/home', function () {
    return view('home/index');
})->middleware('auth')->name('home');

Route::prefix('vendas')->group(function () {

    Route::resource('/', 'VendaController', [
        'names' => [
            'index'             => 'vendas',
            'store'             => 'vendas.store',
            'show'              => 'vendas.show'
        ]
    ])->middleware('auth');

    Route::resource('produtos', 'ProdutoController', [
        'names' => [
            'index'             => 'produtos',
            'store'             => 'produtos.store',
            'show'              => 'produtos.show'
        ]
    ])->middleware('auth');


    Route::get('/produtos/codigoInserido/{cod}',function($id){
        $app = app();
        $controller = $app->make('\App\Http\Controllers\ProdutoController');
        return $controller->searchCDPRODUTO($id);
    });
});


