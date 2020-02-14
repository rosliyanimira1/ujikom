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
Route::get('/tentang', function () {
    return view('frontend.tentang');
});
Route::get('/layanan', function () {
    return view('frontend.layanan');
});
Route::get('/kontak', function () {
    return view('frontend.kontak');
});
Route::get('/galleri', function () {
    return view('frontend.galleri');
});
Route::get('/produk', function () {
    return view('frontend.produk');
});

Route::group(['prefix' => 'admin'], function () {
    
    Route::resource('layanan', 'LayananController');
    Route::resource('galleri', 'galleriController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('produk', 'ProdukController');
});
Route::get('/admin', function () {
        return view('backend.admin');
    });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/layanan', 'FrontendController@layanan');
Route::get('/galleri', 'FrontendController@galleri');
