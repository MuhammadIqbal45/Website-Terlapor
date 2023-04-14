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

Route::get('/input', function () {
    return view('input');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('profile', 'ProfileController@index');
Route::post('profile', 'ProfileController@update');

Route::get('/pengacara-web', 'PengacaraController@index');

Route::get('/layanan-web', 'LayananController@index')->name('layanan-web');
Route::get('/layanan-web', 'LayananController@create')->name('layanan-web');
Route::post('/layanan-web', 'LayananController@store')->name('layanan-web');

Route::get('/contact-us', 'ContactController@index')->name('contact-us');
Route::get('/contact-us', 'ContactController@create')->name('contact-us');
Route::post('/contact-us', 'ContactController@store')->name('contact-us');

Route::get('/informasi-web', 'InformasiController@index');

Route::get('baca-informasi/{id}', 'BacaInformasiController@index');
Route::get('baca-berita/{id}', 'BacaBeritaController@index');
Route::get('detail-pengacara/{id}', 'DaftarPengacaraController@index');

Route::get('/admin-dashboard', 'AdminController@index');

Route::get('/admin-berita', 'AdminBeritaController@index');
Route::get('/admin-tambah-berita', 'AdminBeritaController@create');
Route::post('/admin-simpan-berita', 'AdminBeritaController@store');
Route::get('/admin-edit-berita/{id}', 'AdminBeritaController@edit');
Route::post('/admin-update-berita/{id}', 'AdminBeritaController@update');
Route::get('/admin-delete-berita/{id}', 'AdminBeritaController@destroy');

Route::get('/admin-informasi', 'AdminInformasiController@index');
Route::get('/admin-tambah-informasi', 'AdminInformasiController@create');
Route::post('/admin-simpan-informasi', 'AdminInformasiController@store');
Route::get('/admin-edit-informasi/{id}', 'AdminInformasiController@edit');
Route::post('/admin-update-informasi/{id}', 'AdminInformasiController@update');
Route::get('/admin-delete-informasi/{id}', 'AdminInformasiController@destroy');

Route::get('/admin-contact', 'AdminContactController@index');
Route::get('/admin-tambah-contact', 'AdminContactController@create');
Route::post('/admin-simpan-contact', 'AdminContactController@store');
Route::get('/admin-edit-contact/{id}', 'AdminContactController@edit');
Route::post('/admin-update-contact/{id}', 'AdminContactController@update');
Route::get('/admin-delete-contact/{id}', 'AdminContactController@destroy');

Route::get('/admin-layanan', 'AdminLayananController@index');
Route::get('/admin-tambah-layanan', 'AdminLayananController@create');
Route::post('/admin-simpan-layanan', 'AdminLayananController@store');
Route::get('/admin-edit-layanan/{id}', 'AdminLayananController@edit');
Route::post('/admin-update-layanan/{id}', 'AdminLayananController@update');
Route::get('/admin-delete-layanan/{id}', 'AdminLayananController@destroy');

Route::get('/admin-pengacara', 'AdminPengacaraController@index');
Route::get('/admin-tambah-pengacara', 'AdminPengacaraController@create');
Route::post('/admin-simpan-pengacara', 'AdminPengacaraController@store');
Route::get('/admin-edit-pengacara/{id}', 'AdminPengacaraController@edit');
Route::post('/admin-update-pengacara/{id}', 'AdminPengacaraController@update');
Route::get('/admin-delete-pengacara/{id}', 'AdminPengacaraController@destroy');

Route::get('/admin-user', 'AdminUserController@index');
Route::get('/admin-tambah-user', 'AdminUserController@create');
Route::post('/admin-simpan-user', 'AdminUserController@store');
Route::get('/admin-edit-user/{id}', 'AdminUserController@edit');
Route::post('/admin-update-user/{id}', 'AdminUserController@update');
Route::get('/admin-delete-user/{id}', 'AdminUserController@destroy');
