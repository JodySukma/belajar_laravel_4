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
    return view('welcome');
});

// Route Relasi One To One
Route::get('/pengguna', 'PenggunaController@index');

// Route Relasi One to Many
Route::get('/article', 'WebController@index');

// Route Relasi Many to Many
Route::get('/anggota', 'MemberController@index');
