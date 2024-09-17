<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;


class Logincheck extends Controller
{
    public function redirectToCreatePage()
    {
        if (Auth::check()) {
            return redirect()->route('createpage');
        } else {
            return redirect()->route('login');
        }
    }
}
