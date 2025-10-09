<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/pcr', function () {
    return 'Selamat Datang di Website Kampus PCR!';
});
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
});
Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: '.$param1;
});
Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa';
})->name('mahasiswa.show');

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('home/signup',[HomeController::class, 'showSignup'])->name('signup.show');

Route::POST('home/signup', [HomeController::class, 'signup'])->name('home.signup.submit');

Route::get('/auth',[HomeController::class, 'showlogin'])->name('home.login');

Route::POST('/auth/login', [HomeController::class, 'login'])->name('home.login.submit');

