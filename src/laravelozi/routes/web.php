<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

require __DIR__.'/create.php';//createページを読み込んでいる
require __DIR__.'/createpush.php';//createpushページを読み込んでいる

Auth::routes();//laraveluiの認証機能の１行

Route::get('/', function () {
    return view('top');
});

Route::get('/createpage', function () {
    return view('create/createpage');
})->name('createpage');

Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');



