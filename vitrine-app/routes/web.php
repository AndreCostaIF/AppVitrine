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
    return view('site.index');
})->name('home');

Route::get('lojas/{idCate}', function () {
    return view('site.shopListPage');
})->name('lojas');

Route::get('loja/{idLoja}', function () {
    return view('site.shopPage');
})->name('shopPage');


Route::get('loja/{idLoja}/{idCateProd}', function () {
    return view('site.productListPage');
})->name('productListPage');

Route::get('loja/{idLoja}/{idCateProd}/{idProd}', function () {
    return view('site.productPage');
})->name('productPage');

Route::get('/portaldoparceiro', function () {
    return view('partener.login');
})->name('portaldoparceiro');

