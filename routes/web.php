<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});
Route::get('pengguna', 'PenggunaController@index');
Route::get('home', 'PenggunaController@home');
Route::get('daftar', 'PenggunaController@daftar');
Route::post('/pengguna/daftarnya', 'PenggunaController@store');
Route::post('/pengguna/{id}/edit', 'PenggunaController@edit');
Route::get('/pengguna/{id}', 'PenggunaController@destroy');
Route::get('grafik', 'PenggunaController@grafik');
Route::get('favorit', 'PenggunaController@favorit');

Route::get('/login', 'AuthController@login');
Route::post('/postlogin', 'AuthController@postlogin');
Route::get('/logout', 'AuthController@logout');
Route::get('/dashboardpengguna', 'AuthController@dashboardpengguna');
Route::get('/dashboardadmin', 'AuthController@dashboardadmin');
Route::get('/auth', 'AuthController@index');
Route::get('/auth/{id}', 'AuthController@destroy');
Route::post('/auth/{id}/edit', 'AuthController@edit');

Route::get('/scrapping', 'ScrappingController@index');


