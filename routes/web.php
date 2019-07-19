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
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/single-post', function () {
    return view('single-post');
});

Route::get('/about', function () {
    return view('/about');
});

Route::get('/catagories-post', function () {
    return view('/catagories-post');
});

Route::get('/kategori', function () {
    return view('/kategori');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route Backend
Route::group(
    ['prefix' => 'admin', 'middleware' => ['auth']],
    function () {
        Route::get('/', function () {
            return view('backend.index');
        });
        route::resource('artikel', 'ArtikelController');
        route::resource('kategori', 'KategoriController');
        route::resource('tag', 'TagController');
    }
);

Route::get('/siswa', function () {
    return view('siswa');
});
