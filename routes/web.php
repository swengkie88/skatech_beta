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
//     return view('welcome');
// });


// PagesController Group
Route::get('/', 'PagesController@index');
Route::get('/kontak', 'PagesController@kontak');
Route::get('/tentang_kami', 'PagesController@tentang');
Route::get('/daftar', 'PagesController@daftar');
Route::get('/masuk', 'PagesController@masuk');
Route::get('/beranda', 'PagesController@beranda');


Route::get('/daftar_dudi', 'PagesController@daftar_dudi');


// Routing pengajuan PKL
Route::post('/pilihDuDi', 'PagesController@pilihDuDi');

Route::get('/buatKelompok', function () {
    return view('pekael.buat_kelompok');
});

Route::post('/buatKelompok_post', 'PagesController@buatKelompokStore');
Route::get('/buatKelompok', function () {
    return view('pekael.buat_kelompok');
});
Route::post('/pilihAnggota_post', 'PagesController@pilihAnggotaStore');
Route::get('/pilihAnggota', function () {
    return view('pekael.pilihAnggota');
});


Route::post('/buatKelompok_post', 'PagesController@buatKelompokStore');


// Page Profil View
Route::get('/profil/{id}', 'PagesController@profil');
Route::get('/profil_dudi/{id}', 'PagesController@detailDuDi');
Route::get('/profil_pj_jurusan/{id}', 'PagesController@profil_pj');


// Profil CRUD
Route::get('/profil/{id}/edit', 'PagesController@editProfil');
Route::get('/profil/{id}/edit', 'PagesController@editProfil');
Route::put('/suntingProfil/{id}', 'PagesController@perbaruiProfil');

// Admin layout
Route::get('/dashboard', 'DashboardController@dashboard');

// Siswa Crud
Route::get('/daftarSiswa', 'DashboardController@daftarSiswa');
Route::get('/suntingSiswa/{id}/edit', 'DashboardController@editSiswa');
Route::post('/tambahSiswa', 'DashboardController@tambahSiswa');
Route::put('/suntingSiswa/{id}', 'DashboardController@perbaruiSiswa');
Route::delete('daftarSiswa/{id}', 'DashboardController@hapusSiswa');

// PJ Jurusan CRUD
Route::get('/daftarPjJurusan', 'DashboardController@daftarPjJurusan');
Route::get('/suntingPjJurusan/{id}/edit', 'DashboardController@editPjJurusan');
Route::post('/tambahPjJurusan', 'DashboardController@tambahPjJurusan');
Route::put('/suntingPjJurusan/{id}', 'DashboardController@perbaruiPjJurusan');
Route::delete('daftarPjJurusan/{id}', 'DashboardController@hapusPjJurusan');

Route::get('/daftarKelompok', 'DashboardController@daftarKelompok');

// Jurusan Crud
Route::get('/daftarJurusan', 'DashboardController@daftarJurusan');
Route::get('/suntingJurusan/{id}/edit', 'DashboardController@editJurusan');
Route::post('/tambahJurusan', 'DashboardController@tambahJurusan');
Route::put('/suntingJurusan/{id}', 'DashboardController@suntingJurusan');
Route::delete('daftarJurusan/{id}', 'DashboardController@hapusJurusan');

// DuDi Crud
Route::get('/daftarDuDi', 'DashboardController@daftarDuDi');
Route::get('/suntingDuDi/{id}/edit', 'DashboardController@editDuDi');
Route::post('/tambahDuDi', 'DashboardController@tambahDuDi');
Route::put('/suntingDuDi/{id}', 'DashboardController@perbaruiDuDi');
Route::delete('daftarDuDi/{id}', 'DashboardController@hapusDuDi');

// UserAuth group
Route::post('/loginPost', 'User@loginPost');
Route::post('/registerPost', 'User@registerPost');
Route::get('/logout', 'User@logout');