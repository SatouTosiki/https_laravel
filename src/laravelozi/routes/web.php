<?php

use Illuminate\Support\Facades\Route;

Auth::routes();//laraveluiの認証機能の１行

Route::get('/', function () {
    return view('top');
});

Route::get('/createpage', function () {
    return view('create/createpage');
})->name('createpage');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');


