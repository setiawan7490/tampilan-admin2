<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});

// Admin Dashboard
Route::get('/admin/dashboard', function () {
    return view('admin.dashboard');
})->name('admin.dashboard');

// Artikel
Route::get('/admin/artikel', function () {
    return view('admin.artikel');
})->name('admin.artikel.index');

// Verifikasi
Route::get('/admin/verifikasi', function () {
    return view('admin.verifikasi');
})->name('admin.verifikasi');

// Route::get('/admin/test', function () {
//     return view('admin.test');
// });

