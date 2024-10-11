<?php

use App\Http\Controllers\Logincheck;
use App\Http\Controllers\PostController;

//投稿ボタンを押した時
Route::post('/post', [PostController::class, 'store'])->name('post.store');


