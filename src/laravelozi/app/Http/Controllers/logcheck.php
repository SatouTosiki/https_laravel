<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class logcheck extends Controller
{
    public function redirectToCreatePage()
    {
        if (Auth::check()) {
            return redirect()->route('createpage');
        } else {
            return redirect()->route('login')->with('alert', 'ログインしてください');
        }
    }
}
