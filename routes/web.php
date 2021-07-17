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

Route::get('/get', function () {
    return 'Tes route dengan method HTTP get';
});

Route::post('/post', function () {
    return 'Tes route dengan method HTTP post';
});

Route::put('/put', function () {
    return 'Tes route dengan method HTTP put';
});

Route::delete('/delete', function () {
    return 'Tes route dengan method HTTP put';
});

Route::get('/page/{page-number}', function ($page_number) {
    return "<h1>Halaman ".$page_number."</h1>"."Laravel Emang Keren.";
});

Route::get('/page/{parameter1?}', function ($parameter1="Gita") {
    return "Parameter Nama adalah ".$parameter1;
});

Route::resource('pengajar','PengajarController');
Route::get('pengajar/delete/{id}', 'PengajarController@delete');
Route::post('pengajar/update', 'PengajarController@update');

Route::resource('anggota','AnggotaController');
Route::get('anggota/delete/{id}', 'AnggotaController@delete');
Route::post('anggota/update', 'AnggotaController@update');

Route::resource('mata_pelajaran','MataPelajaranController');
Route::get('mata_pelajaran/delete/{id}', 'MataPelajaranController@delete');
Route::post('mata_pelajaran/update', 'MataPelajaranController@update');

Route::resource('jadwalbelajar','JadwalBelajarController');
Route::get('jadwalbelajar/delete/{id}', 'JadwalBelajarController@delete');
Route::post('jadwalbelajar/update', 'JadwalBelajarController@update');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
