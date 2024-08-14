<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RouteViewController extends Controller
{
    public function registrationView()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('registration');
    }

    public function loginView()
    {
        if (Auth::check())
            return redirect()->route('dashboard');

        return view('login');
    }
}
