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

Route::get('tes', function () {
    return view('welcome');
});
Route::resource('/','siswaController');
Route::get('/siswa/{id}/edit','siswaController@edit');
Route::put('siswa/{id}/update', 'siswaController@update');
Route::get('tambah','siswaController@create');
Route::post('store','siswaController@store');
Route::delete('siswa/{id}','siswaController@destroy');
