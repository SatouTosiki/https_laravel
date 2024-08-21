<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\logcheck;

require __DIR__.'/create.php';//createページから読み込んでいる

Auth::routes();//laraveluiの認証機能の１行

Route::get('/', function () {
    return view('top');
});

Route::get('/createpage', function () {
    return view('create/createpage');
})->name('createpage');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');

Route::get('/create-check', [logcheck::class, 'redirectToCreatePage'])->name('auth-check');


