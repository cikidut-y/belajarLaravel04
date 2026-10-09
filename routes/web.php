<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.beranda');
});

Route::get('/hello', function () {
    return view('pages.hello');
});

Route::get('/profil', function () {
    return view('pages.profil');
});

Route::get('/profil2', function () {
    return view('pages.profil2', [
        'nama'  => 'Dirak',
        'nim'   => '0123456789',
        'kelas' => 'TRM-09',
        'prodi' => 'Teknologi Rekayasa Multimedia',
    ]);
});

Route::get('home', function () {
    return view('pages.home');
});