<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class aduan extends Controller
{
    public function index()
    {
        // check if user is logged in
        if (!session()->has('username')) {
            return redirect()->intended('/login');    
        }

        return view('aduan');
    }
}
