<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class LogOutController extends Controller
{
    //
    public function logOut()
    {
        Auth::logout();

        return redirect()->route('landingPage');
    }
}
