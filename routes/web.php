<?php

use App\Http\Controllers\KecamatanController;
use App\Http\Controllers\KelurahanController;
use App\Http\Controllers\PerangkatController;
use App\Http\Controllers\WifiController;
use App\Http\Controllers\ZoomController;
use App\Http\Controllers\PembuatanAppController;
use App\Http\Controllers\SubdomainController;
use App\Http\Controllers\PengembanganAppController;
use App\Http\Controllers\MigrasiServerController;
use App\Http\Controllers\NarasumberController;
use App\Http\Controllers\kecamatanOldController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Models\kecamatan;
use App\Models\kelurahan;
use App\Models\User;
use App\Models\level;
use App\Models\PembuatanApp;
use App\Models\PengembanganApp;
use App\Models\PerangkatDaerah;
use App\Models\Subdomain;
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
    return view('home');
});


// KUMPULAN ROUTE KE HALAMAN USER
Route::resource('/dashboard', UserController::class)->middleware('auth');

//Route Halaman Index Laporan Wifi
Route::resource('/LaporanWifi', WifiController::class)->middleware('auth');
//Route Halaman Form
Route::get('/LaporanWifi/create', [WifiController::class, 'create'])->middleware('auth');




// Route::resource('/PermohonanMigrasiServer', MigrasiServerController::class)->middleware('auth');
// Route::get('/PermohonanMigrasiServer/create', [MigrasiServerController::class, 'create'])->middleware('auth');

// Route::resource('/PermohonanPembuatanAplikasi', PembuatanAppController::class)->middleware('auth');
// Route::get('/PermohonanPembuatanAplikasi/create', [PembuatanAppController::class, 'create'])->middleware('auth');


// Route::resource('/PermohonanPengembanganAplikasi', PengembanganAppController::class)->middleware('auth');
// Route::get('/PermohonanPengembanganAplikasi/create', [PengembanganAppController::class, 'create'])->middleware('auth');


// Route::resource('/PermohonanNarsumPendampingan', NarasumberController::class)->middleware('auth');
// Route::get('/PermohonanNarsumPendampingan/create', [NarasumberController::class, 'create'])->middleware('auth');

// Route::resource('/PermohonanFasilitasZoom', ZoomController::class)->middleware('auth');
// Route::get('/PermohonanFasilitasZoom/create', [ZoomController::class, 'create'])->middleware('auth');


// KUMPULAN ROUTE KE HALAMAN ADMIN //
Route::get('/AdminDashboard', [UserController::class, 'tampil'])->middleware('auth');
Route::get('/print', [SubdomainController::class, 'print'])->middleware('auth');




// MENU KECAMATAN //


Route::resource('/ViewKecamatan', KecamatanController::class)->middleware('auth');
//PAGE INDEX KECAMATAN
Route::get('/md/ViewKecamatan', [KecamatanController::class, 'index'])->middleware('auth');
Route::post('/md/ViewKecamatan/kel', [KecamatanController::class, 'dataKelurahan'])->middleware('auth');
//AKSI DELETE KECAMATAN
Route::get('/ViewKecamatan/delete/{kecamatan:id}', [KecamatanController::class, 'destroy'])->middleware('auth');
//AKSI UPDATE KECAMATAN
Route::post('/ViewKecamatan/update/{kecamatan:id}', [KecamatanController::class, 'update'])->middleware('auth');


// ROUTE DI MENU KELURAHAN //


Route::resource('/ViewKelurahan', KelurahanController::class)->middleware('auth');
//PAGE INDEX KELURAHAN
Route::get('/md/ViewKelurahan', [KelurahanController::class, 'index'])->middleware('auth');
//AKSI DELETE KELURAHAN
Route::get('/ViewKelurahan/delete/{kelurahan:id}', [KelurahanController::class, 'destroy'])->middleware('auth');
//AKSI UPDATE KELURAHAN
Route::post('/ViewKelurahan/update/{kelurahan:id}', [KelurahanController::class, 'update'])->middleware('auth');


// ROUTE DI MENU PERANGKAT DAERAH//


Route::resource('/ViewInstansi', PerangkatController::class)->middleware('auth');
// AKSI UPLOAD PERANGKAT DESA
Route::post('/ViewInstansi/create', [PerangkatController::class, 'store'])->middleware('auth');
// PAGE INDEX PERANGKAT DESA
Route::get('/md/ViewInstansi', [PerangkatController::class, 'index'])->middleware('auth');
// AKSI UPDATE PERANGKAT DESA
Route::post('/ViewInstansi/update/{perangkat_daerah:id}', [PerangkatController::class, 'update'])->middleware('auth');
// AKSI DELETE PERANGKAT DESA
Route::get('/ViewInstansi/delete/{perangkat_daerah:id}', [PerangkatController::class, 'destroy'])->middleware('auth');



// ADUAN PERMASALAHAN WIFI //


Route::resource('/ViewWifi', WifiController::class)->middleware('auth');
// PAGE INDEX ADMIN
Route::get('/form/KelolaWifi', [WifiController::class, 'tampil'])->middleware('auth');
// PAGE VERIFIKASI ADMIN
Route::get('/form/KelolaWifi/{wifi:id}/edit', [WifiController::class, 'edit'])->middleware('auth');
// AKSI UPDATE / VERIFIKASI ADMIN
Route::post('/ViewWifi/update/{wifi:id}', [WifiController::class, 'update'])->middleware('auth');
// AKSI DELETE ADMIN
Route::get('/ViewWifi/delete/{wifi:id}', [WifiController::class, 'destroy'])->middleware('auth');

//PAGE USER
Route::get('/LayananWifi/detail/{wifi:id}', [WifiController::class, 'detail'])->middleware('auth');
 

// PERMOHONAN FASILITAS ZOOM //


Route::resource('/ViewZoom', ZoomController::class)->middleware('auth');
// PAGE INDEX ADMIN
Route::get('/form/KelolaFasilitasZoom', [ZoomController::class, 'tampil'])->middleware('auth');
// PAGE VERIFIKASI ADMIN
Route::get('/form/KelolaFasilitasZoom/{zoom:id}/edit', [ZoomController::class, 'edit'])->middleware('auth');
// AKSI UPDATE / VERIFIKASI ADMIN
Route::post('/ViewZoom/update/{zoom:id}', [ZoomController::class, 'update'])->middleware('auth');
// AKSI DELETE
Route::get('/ViewZoom/delete/{zoom:id}', [ZoomController::class, 'destroy'])->middleware('auth');

//PAGE USER
Route::resource('/PermohonanFasilitasZoom', ZoomController::class)->middleware('auth');
Route::get('/PermohonanFasilitasZoom/create', [ZoomController::class, 'create'])->middleware('auth');
Route::get('/PermohonanFasilitasZoom/detail/{zoom:id}', [ZoomController::class, 'detail'])->middleware('auth');


// PERMOHONAN NARASUMBER PENDAMPINGAN //


Route::resource('/ViewNarasumber', NarasumberController::class)->middleware('auth');
// PAGE INDEX ADMIN
Route::get('/form/KelolaNarasumberPendampingan', [NarasumberController::class, 'tampil'])->middleware('auth');
// PAGE VERIFIKASI ADMIN
Route::get('/form/KelolaNarasumberPendampingan/{narasumber:id}/edit', [NarasumberController::class, 'edit'])->middleware('auth');
// AKSI UPDATE / VERIFIKASI ADMIN
Route::post('/ViewNarasumber/update/{narasumber:id}', [NarasumberController::class, 'update'])->middleware('auth');
//AKSI DELETE 
Route::get('/ViewNarasumber/delete/{narasumber:id}', [NarasumberController::class, 'destroy'])->middleware('auth');

//PAGE USER
Route::resource('/PermohonanNarsumPendampingan', NarasumberController::class)->middleware('auth');
Route::get('/PermohonanNarsumPendampingan/create', [NarasumberController::class, 'create'])->middleware('auth');
Route::get('/PermohonanNarsumPendampingan/detail/{narasumber:id}', [NarasumberController::class, 'detail'])->middleware('auth');



// PEMBUATAN APP //


Route::resource('/ViewPembuatanApp', PembuatanAppController::class)->middleware('auth');
Route::get('/ViewPembuatanApp/delete/{pembuatanApp:id}', [PembuatanAppController::class, 'destroy'])->middleware('auth');
// PAGE INDEX ADMIN
Route::get('/form/KelolaPembuatanAplikasi', [PembuatanAppController::class, 'tampil'])->middleware('auth');
// PAGE VERIFIKASI ADMIN
Route::get('/form/KelolaPembuatanAplikasi/{pembuatanApp:id}/edit', [PembuatanAppController::class, 'edit'])->middleware('auth');
// AKSI UPDATE / VERIFIKASI ADMIN
Route::post('/ViewPembuatanAplikasi/update/{pembuatanApp:id}', [PembuatanAppController::class, 'update'])->middleware('auth');

//PAGE USER
Route::resource('/PermohonanPembuatanAplikasi', PembuatanAppController::class)->middleware('auth');
Route::get('/PermohonanPembuatanAplikasi/create', [PembuatanAppController::class, 'create'])->middleware('auth');
Route::get('/PermohonanPembuatanAplikasi/detail/{pembuatanApp:id}', [PembuatanAppController::class, 'detail'])->middleware('auth');


//PENGEMBANGAN APP//


Route::resource('/ViewPengembanganApp', PengembanganAppController::class)->middleware('auth');
// PAGE INDEX ADMIN
Route::get('/form/KelolaPengembanganAplikasi', [PengembanganAppController::class, 'tampil'])->middleware('auth');
// PAGE VERIFIKASI ADMIN
Route::get('/form/KelolaPengembanganAplikasi/{pengembanganApp:id}/edit', [PengembanganAppController::class, 'edit'])->middleware('auth');
// AKSI UPDATE / VERIFIKASI ADMIN
Route::post('/ViewPengembanganAplikasi/update/{pengembanganApp:id}', [PengembanganAppController::class, 'update'])->middleware('auth');
//AKSI DELETE
Route::get('/ViewPengembanganApp/delete/{pengembanganApp:id}', [PengembanganAppController::class, 'destroy'])->middleware('auth');

//PAGE USER
Route::resource('/PermohonanPengembanganAplikasi', PengembanganAppController::class)->middleware('auth');
Route::get('/PermohonanPengembanganAplikasi/create', [PengembanganAppController::class, 'create'])->middleware('auth');
Route::get('/PermohonanPengembanganAplikasi/detail/{pengembanganApp:id}', [PengembanganAppController::class, 'detail'])->middleware('auth');


//PERMOHONAN MIGRASI SERVER//


Route::resource('/ViewMigrasiServer', MigrasiServerController::class)->middleware('auth');
// PAGE INDEX ADMIN
Route::get('/form/KelolaMigrasiServer', [MigrasiServerController::class, 'tampil'])->middleware('auth');
// PAGE VERIFIKASI ADMIN
Route::get('/form/KelolaMigrasiServer/{migrasiserver:id}/edit', [MigrasiServerController::class, 'edit'])->middleware('auth');
// AKSI UPDATE / VERIFIKASI ADMIN
Route::post('/ViewMigrasiServer/update/{migrasiserver:id}', [MigrasiServerController::class, 'update'])->middleware('auth');
//AKSI DELETE
Route::get('/ViewMigrasiServer/delete/{migrasiserver:id}', [MigrasiServerController::class, 'destroy'])->middleware('auth');

//PAGE USER
Route::resource('/PermohonanMigrasiServer', MigrasiServerController::class)->middleware('auth');
Route::get('/PermohonanMigrasiServer/create', [MigrasiServerController::class, 'create'])->middleware('auth');
Route::get('/PermohonanMigrasiServer/detail/{migrasiserver:id}', [MigrasiServerController::class, 'detail'])->middleware('auth');


// PERMOHONAN SUBDOMAIN //


Route::resource('/ViewSubdomain', SubdomainController::class)->middleware('auth');
// PAGE INDEX ADMIN
Route::get('/form/KelolaSubdomain', [SubdomainController::class, 'tampil'])->middleware('auth');
// PAGE VERIFIKASI ADMIN
Route::get('/form/KelolaSubdomain/{subdomain:id}/edit', [SubdomainController::class, 'edit'])->middleware('auth');
// AKSI UPDATE / VERIFIKASI ADMIN
Route::post('/ViewSubdomain/update/{subdomain:id}', [SubdomainController::class, 'update'])->middleware('auth');
//AKSI DELETE USER
Route::get('/ViewSubdomain/delete/{subdomain:id}', [SubdomainController::class, 'destroy'])->middleware('auth');

//PAGE USER
Route::resource('/PermohonanSubdomain', SubdomainController::class)->middleware('auth');
Route::get('/PermohonanSubdomain/detail/{subdomain:id}', [SubdomainController::class, 'detail'])->middleware('auth');


// MENU DATA USER //


// PAGE INDEX
Route::get('/KelolaUser', [UserController::class, 'showuser'])->middleware('auth');
// MODAL EDIT
Route::get('/KelolaUser/{user:id}/edit', [UserController::class, 'edit'])->middleware('auth');
// AKSI CREATE USER
Route::post('/KelolaUser/create', [UserController::class, 'store'])->middleware('auth');
// AKSI UPDATE / VERIFIKASI ADMIN
Route::post('/KelolaUser/update/{user:id}', [UserController::class, 'update'])->middleware('auth');
//AKSI DELETE USER
Route::get('/KelolaUser/delete/{user:id}', [UserController::class, 'destroy'])->middleware('auth');



//LOGIN//
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);

//LOGOUT//
Route::post('/logout', [LoginController::class, 'logout']);

// PROFILE //
Route::get('/profile', [UserController::class, 'profile']);
Route::get('/profile/edit', [UserController::class, 'editUser']);
Route::post('/edit/{user:id}', [UserController::class, 'cek']);


