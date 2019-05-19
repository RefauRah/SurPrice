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

Route::resource('/admin/kategori','KategoriController');

Route::resource('/admin/produk','MasterProdukController');

Route::get('/admin/admin', function () {
    return view('admina/admin');
});

Route::get('/admin/register', function () {
    return view('admina/tambah');
});

Route::post('/hasilsearch', 'produkController@search')->name('produk.search');
