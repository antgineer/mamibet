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
//     return view('pages.home');
// });

Route::get('/', 'PagesController@index');
Route::get('/deposit', 'PagesController@deposit');
Route::get('/withdraw', 'PagesController@withdraw');
Route::get('/daftar', 'PagesController@daftar');
Route::resource('/berita','BeritaController');
Route::resource('/promo','PromosiController');
Route::resource('/permainan','PermainanController');
Route::get('/tvonline','PagesController@tvonline');


Auth::routes();

Route::get('/internal', 'HomeController@index');
Route::get('/internal/berita','HomeController@adminberita');
Route::get('/internal/createberita','HomeController@create');
Route::post('/internal/createberitas','HomeController@store');
Route::get('/internal/{id}/edit','HomeController@edit');
Route::put('/internal/berita/{id}','HomeController@update');
Route::delete('/internal/beritas/{id}','HomeController@destroy');
Route::get('/internal/promo','HomeController@adminpromo');
Route::get('/internal/createpromo','HomeController@createpromo');
Route::post('/internal/createpromos','HomeController@storepromo');
Route::get('/internal/promo/{id}/edit','HomeController@editpromo');
Route::put('/internal/promo/{id}','HomeController@updatepromo');
Route::delete('/internal/promos/{id}','HomeController@destroypromo');
Route::resource('internal','HomeController');



