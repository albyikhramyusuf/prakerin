<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


// Route::get('siswa', 'SiswaController@index');
// Route::get('siswa', 'SiswaController@index1');
Route::resource('pendidikan', 'PendidikanController');
route::resource('artikel', 'ArtikelController');

// Route::group(['middleware' => 'cors'], function () {
//     route::resource('/artikel', 'ArtikelAPIController');
//     route::resource('/kategori', 'KategoriKontroller');
//     route::resource('/tag', 'TagKontroller');
//     Route::resource('siswa', 'SiswaController');
//     Route::resource('pendidikan', 'PendidikanController');
//     route::resource('artikel', 'ArtikelController');
// });

Route::get('beritaterbaru','FrontendController@berita');
