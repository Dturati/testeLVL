<?php
//phpinfo();
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

Route::get('/teste',function() {
    return '<h1>Teste</h1>';
});

Route::get('/lista',['as' => 'listar', 'uses' =>'ProdutoController@lista']);
Route::get('/lista/visualizar/{id}',['as' => 'visualizar', 'uses' => 'ProdutoController@visualizar'])
    ->where('id','[0-9]+');
Route::get('/produto/novo',['as' => 'novo','uses' => 'ProdutoController@novo']);
Route::post('/produto/novo',['as' => 'novo','uses' => 'ProdutoController@novo']);
Route::get('/produto/exportar',['as' => 'exportar','uses' => 'ProdutoController@exportar']);