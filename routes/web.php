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

// Route::get('/', function () {
//     return view('index');
// })->name('surprice');

Route::get('/hasil', function () {
    return view('hasil');
});

Route::post('/hasilsearch', 'produkController@search')->name('produk.search');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Users
Route::get('/', 'UserController@index')->name('surprice'); 
Route::get('/login', 'UserController@login');
Route::post('/loginPost', 'UserController@loginPost');
Route::get('/register', 'UserController@register');
Route::post('/registerPost', 'UserController@registerPost');
Route::get('/logout', 'UserController@logout');
