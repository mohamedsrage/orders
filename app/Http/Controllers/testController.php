<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class testController extends Controller
{
    public function test()
    {
        if (Auth::check() && Auth()->user()->is_admin == 1) {
            return view('AdminPage');
        }
        
        return view('UserPage');
    }
}
