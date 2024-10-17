<?php

use App\Http\Controllers\PostController;

//投稿ボタンを押した時
Route::post('/post', [PostController::class, 'store'])->name("post.store");

//投稿ページを表示させるroute
Route::get('/createpage', function () {
    return view('create/createpage');
})->name('createpage');


