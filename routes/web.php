<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

// Proses login
Route::post('/login', function (Request $request) {
    $credentials = $request->only('email', 'password');

    if (Auth::attempt($credentials)) {
        return redirect()->intended('/admin/dashboard');
    }

    return back()->with('error', 'Email atau password salah.');
})->name('login.proses');

Route::middleware('auth')->group(function () {
    Route::get('/admin/dashboard', fn () => view('admin.pages.dashboard.index'))->name('admin.dashboard');
    Route::get('/admin/artikel', fn () => view('admin.pages.artikel.index'))->name('admin.artikel.index');
    Route::get('/admin/verifikasi', fn () => view('admin.pages.verifikasi.index'))->name('admin.verifikasi');
});

//test route
// Route::get('/admin/test', function () {
//     return view('admin.test');
// });

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

