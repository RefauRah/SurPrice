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
    return view('index');
})->name('surprice');

Route::get('/hasil', function () {
    return view('hasil');
});

Route::get('/admin', function () {
    return view('admina/base');
});

Route::get('/admin/produk', function () {
    return view('produk/produk');
});

Route::get('/admin/produk/tambah_produk', function () {
    return view('produk/tambah_produk');
});

Route::get('/admin/admin', function () {
    return view('admina/admin');
});

Route::get('/admin/register', function () {
    return view('admina/tambah_admin');
});

Route::post('/hasilsearch', 'produkController@search')->name('produk.search');
