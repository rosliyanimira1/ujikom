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
Route::get('/tentang', function () {
    return view('frontend.tentang');
});
Route::get('/layanan', function () {
    return view('frontend.layanan');
});
Route::get('/layanan1', function () {
    return view('frontend.layanan1');
});

Route::get('/galleri', function () {
    return view('frontend.galleri');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('backend.admin');
    }); 
    Route::resource('layanan', 'LayananController');
    Route::resource('layanan1', 'Layanan1Controller');
    Route::resource('galleri', 'galleriController');
    Route::resource('kategori', 'KategoriController');
    Route::resource('produk', 'ProdukController');
    Route::resource('jambuka', 'JambukaController');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/layanan', 'FrontendController@layanan');
Route::get('/layanan1', 'FrontendController@layanan1');
Route::get('/galleri', 'FrontendController@galleri');
Route::get('/jambuka', 'JambukaController@galleri');
Route::get('/produk', 'FrontendController@produk');
Route::get('/produk/search', 'FrontendController@search');
Route::get('/', 'FrontendController@index');

// Route::any('/search',function(){
//     $q = Request::input ( 'q' );
//     $produk = produk::where('Nama_produk','LIKE','%'.$q.'%')->orWhere('slug','LIKE','%'.$q.'%')->get();
//     if(count($produk) > 0)
//         return view('frontend.produk')->withDetails($produk)->withQuery ( $q );
//     else return view ('frontend.produk')->withMessage('No Details found. Try to search again !');
// });