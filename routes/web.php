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

/*Route::get('/', function () {
    return view('welcome');
}); */

// Route::get('/', function () {
//     return view('frontend.index');
// });

//Route frontend
Route::get('/', 'FrontendController@index');

//Route search
Route::get('/search', 'FrontendController@search'); 

//Route Detail Buku
Route::get('/detailbuku/{buku_id}', 'FrontendController@detail'); 

Auth::routes();

Route::middleware(['auth'])->group(function () {
    // Page Dashboard
    Route::get('/dashboard', 'DashboardController@index');
    // CRUD Penulis
    Route::resource('penulis','PenulisController');
    // CRUD Kategori
    Route::resource('kategori','KategoriController');
    // CRUD Buku
    Route::resource('buku', 'BukuController');
    // CRUD Anggota
    Route::resource('anggota', 'AnggotaController'); 
    // CRUD Pinjam
    Route::resource('pinjam', 'PinjamController');
    // CRUD Admin
    Route::resource('admin', 'UserController');

    // Route::get('/home', 'HomeController@index')->name('home');
});