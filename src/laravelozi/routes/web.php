<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('top');
});

Route::get('/createpage', function () {
    return view('createpage');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



Route::get('/createpage', function () {
    return view('create/createpage');
});