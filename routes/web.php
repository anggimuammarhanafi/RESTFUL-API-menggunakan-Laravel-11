<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome'); // Halaman utama
});

Route::get('/home', function () {
    return 'Selamat Datang'; // Konten untuk Home
});

Route::get('/mahasiswa', function () {
    return 'Halaman Home'; // Konten untuk Mahasiswa
});

Route::get('/about', function () {
    return 'Halaman About'; // Konten untuk About
});