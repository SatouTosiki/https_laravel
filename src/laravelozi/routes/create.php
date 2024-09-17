<?php

use App\Http\Controllers\Logincheck;

Route::get('/create-check-test', [Logincheck::class, 'redirectToCreatePage'])->name('auth-check');