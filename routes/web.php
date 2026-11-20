<?php

use Illuminate\Support\Facades\Route;

Route::redirect('/', '/portofolio');

Route::prefix('portofolio')->name('portofolio.')->group(function () {
    Route::view('/', 'portfolio.beranda')->name('beranda');
    Route::view('/tentang', 'portfolio.tentang')->name('tentang');
    Route::view('/proyek', 'portfolio.proyek')->name('proyek');
    Route::view('/kontak', 'portfolio.kontak')->name('kontak');
});
