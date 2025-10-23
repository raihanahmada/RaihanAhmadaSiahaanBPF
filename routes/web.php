<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;


// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('/pcr', function () {
//     return 'Selamat Datang di Website Kampus PCR!';
// });
// Route::get('/mahasiswa', function () {
//     return 'Halo Mahasiswa';
// });
// Route::get('/nama/{param1}', function ($param1) {
//     return 'Nama saya: '.$param1;
// });
// Route::get('/mahasiswa', function () {
//     return 'Halo Mahasiswa';
// })->name('mahasiswa.show');

// Route::get('/about', function () {
//     return view('halaman-about');
// });

// Route::get('home/signup',[HomeController::class, 'showSignup'])->name('signup.show');

// Route::POST('home/signup', [HomeController::class, 'signup'])->name('home.signup.submit');

// Route::get('/auth',[HomeController::class, 'showlogin'])->name('home.login');
// Route::POST('/auth/login', [HomeController::class, 'login'])->name('home.login.submit');

Route::get('/home', [PegawaiController::class, 'index'])->name('home.Pegawai');
Route::POST('/home/Dashboard', [PegawaiController::class, 'showLogin'])->name('home.pegawai.login');
Route::POST('/home/pegawai/submit',
 [PegawaiController::class, 'showPendaftar'])->name('home.signup.submit');
Route::get('/home/pegawai/daftar', 
[PegawaiController::class, 'showSignup'])->name('show.signup.pekerja');


// // route menuju halaman signup success
// Route::get('/signup-success', function () {
//     return view('signup-succes', [
//         'name' => session('username'),
//         'email' => session('email'),
//         'password' => '********', // jangan tampilkan password asli di view
//     ]);
// })->name('home.signup.success');
