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

Route::get('/', 'InformasiController@index');
Route::get('/penginapan', 'InformasiController@penginapan_show');
Route::get('/gallery', 'InformasiController@gallery_show');
Route::get('/login', 'AuthController@login')->name('login');
Route::get('/registrasi', 'PagesController@registrasi');
Route::post('/login/process', 'AuthController@loginProcess');
Route::get('/logout','AuthController@logout');
Route::get('/about', 'PagesController@about');
Route::post('/komentar', 'PengunjungController@komentar');
Route::get('/single_berita/{id}', 'InformasiController@single_berita');
Route::get('/informasi/allWisata', 'InformasiController@allWisata');
Route::get('/informasi/allPenginapan', 'InformasiController@allPenginapan');
Route::post('/daftarAdmin/add', 'AdminController@add');
Route::group(['middleware' => ['auth', 'CheckStatus:admin,warga']], function () {
    Route::get('/dashboard', 'PagesController@admin');
    Route::get('/informasi', 'PagesController@informasi');
    Route::post('/informasi/create', 'InformasiController@create');
    Route::get('/informasi/{id_informasi}/delete', 'InformasiController@destroy');
    Route::get('/informasi/{id_informasi}/edit', 'InformasiController@edit');
    Route::post('/informasi/{id_informasi}/update', 'InformasiController@update');
    Route::get('/daftarWarga', 'PagesController@daftarWarga');
    Route::post('/warga/add', 'WargaController@add');
    Route::get('/listKomentar', 'PagesController@listKomentar');
    Route::get('/pesanWarga/{id}', 'PagesController@pesanWarga');
    Route::get('daftarPesanWarga', 'PagesController@daftarPesanWarga');
    Route::post('kirimPesan/{id}', 'PagesController@kirimPesan');
    Route::get('/profile/{id}', 'UserController@show');
    Route::get('/isiBiodata', 'PagesController@isiBiodata');
    Route::get('/daftarAdmin', 'AdminController@create');
    Route::get('/warga/{id}/detail', 'WargaController@detail');
    Route::get('/listWarga', 'WargaController@listWarga');
    Route::get('listAdmin', 'AdminController@index');
    Route::get('/warga/{id}/delete', 'WargaController@delete');
    Route::get('/admin/{id}/delete', 'AdminController@destroy');
    Route::get('/isiBiodata', 'WargaController@isiBiodata');
    Route::post('/biodataWarga/{id}/add', 'Biodata_wargaController@add');
    Route::get('/biodataWarga/{id}/ubah', 'Biodata_wargaController@ubah');
    Route::post('/biodataWarga/{id}/update', 'Biodata_wargaController@update');
    Route::get('/hapusPesanWarga/{id}', 'PesanController@destroy');
    Route::get('/balasPesanWarga/{id}', 'PesanController@balas');
    Route::post('/balasPesan/{id}', 'PesanController@balasPesan');
    Route::get('/lihatBalasan/{id}', 'PesanController@lihatBalasan');
    Route::get('/balasKomentar/{id}', 'PengunjungController@balasKomentar');
    Route::post('/kirimBalasanKomentar/{id}', 'PengunjungController@kirimBalasanKomentar');
    Route::get('/Komentar/{id}/hapus', 'PengunjungController@hapusKomentar');
    Route::get('/balasanKomentar/{id}/hapus', 'PengunjungController@hapusBalasanKomentar');
    Route::get('/accountSetting/{id}', 'UserController@editAkun');
    Route::post('/accountSetting/{id}/process', 'UserController@editAkun_process');
    Route::get('/profile/{id}/admin', 'AdminController@profile');
    Route::get('/admin_profile/{id}/edit', 'AdminController@edit');
    Route::post('/admin_profile/{id}/update', 'AdminController@update');
    Route::get('/jerry', function(){
        return view('template.admin');
    });
});

Route::get('/gallery2', function () {
    return view('public.gallery2');
});

