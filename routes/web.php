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
    return view('frontend.index');
});

Route::get('/layanan', function () {
    return view('frontend.layanan');
});
Route::get('/testimoni', function () {
    return view('frontend.testimoni');
});
Route::get('/produk', function () {
    return view('frontend.produk');
});
Route::get('/admin', function () {
    return view('backend.admin');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
