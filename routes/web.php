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

Route::get('/', '\App\Http\Controllers\MainController@index');

Route::get('/cart', '\App\Http\Controllers\CartController@index')->name('cart');

Route::get('/login', '\App\Http\Controllers\AuthController@selectLogin')->name('login');
Route::get('/register', '\App\Http\Controllers\AuthController@register')->name('register');
Route::get('/register/empresa', '\App\Http\Controllers\AuthController@registerEmpresa')->name('register_empresa');
Route::get('/register/user', '\App\Http\Controllers\AuthController@registerUser')->name('register_user');
Route::post('/sendlogin', '\App\Http\Controllers\AuthController@authLogin')->name('enviar_login');

Route::get('/sair', '\App\Http\Controllers\AuthController@logout')->name('sair');

/*
|--------------------------------------------------------------------------
| Rotas das produtos
|--------------------------------------------------------------------------
*/

Route::get('/produtos', '\App\Http\Controllers\ProdutosController@index')->name('produtos');
Route::get('/produtos/novo', '\App\Http\Controllers\ProdutosController@create')->name('novo_produto');
Route::post('/produtos/novo',  '\App\Http\Controllers\ProdutosController@store')->name('salvar_produto');
Route::get('/produtos/editar/{id}', '\App\Http\Controllers\ProdutosController@edit')->name('editar_produto');
Route::get('/produtos/del/{id}', '\App\Http\Controllers\ProdutosController@destroy')->name('excluir_produto');
Route::post('/produtos/upd/{id}', '\App\Http\Controllers\ProdutosController@update')->name('atualizar_produto');

/*
|--------------------------------------------------------------------------
| Rotas das empresas
|--------------------------------------------------------------------------
*/

Route::get('/empresas/busca/{cep}',  '\App\Http\Controllers\EmpresasController@buscaCEP');
Route::get('/empresas', '\App\Http\Controllers\EmpresasController@index');
Route::get('/empresas/criar', '\App\Http\Controllers\EmpresasController@create')->name('nova_empresa');
Route::post('/empresas/novo',  '\App\Http\Controllers\EmpresasController@store')->name('salvar_empresa');
Route::get('/empresas/editar/{id}', '\App\Http\Controllers\EmpresasController@edit')->name('editar_empresa');
Route::get('/empresas/del/{id}', '\App\Http\Controllers\EmpresasController@destroy')->name('excluir_empresa');
Route::post('/empresas/upd/{id}', '\App\Http\Controllers\EmpresasController@update')->name('atualizar_empresa');

/*
|--------------------------------------------------------------------------
| Rotas dos clientes
|--------------------------------------------------------------------------
*/
Route::get('/clientes', '\App\Http\Controllers\ClientesController@index');
Route::get('/clientes/novo', '\App\Http\Controllers\ClientesController@create')->name('novo_usuario');
Route::post('/clientes/novo',  '\App\Http\Controllers\ClientesController@store')->name('salvar_cliente');
Route::get('/clientes/editar/{id}', '\App\Http\Controllers\ClientesController@edit')->name('editar_cliente');
Route::get('/clientes/del/{id}', '\App\Http\Controllers\ClientesController@destroy')->name('excluir_cliente');
Route::post('/clientes/upd/{id}', '\App\Http\Controllers\ClientesController@update')->name('atualizar_cliente');

Route::get('/shop/{name}', '\App\Http\Controllers\MainController@LoadCompanyShop')->name('LoadCompanyShop');
Route::get('/shop/buy/{id}', '\App\Http\Controllers\MainController@BuyProduct')->name('BuyProduct');
Route::post('/shop/buy/finish', '\App\Http\Controllers\MainController@FinishBuyProduct')->name('FinishBuyProduct');