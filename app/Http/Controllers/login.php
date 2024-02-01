<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class login extends Controller {
    public function index() {
        return view('login');
    }

    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        // check if username and password is admin
        if ($credentials['username'] == 'admin' && $credentials['password'] == 'admin') {
            $request->session()->put('username', $credentials['username']);
            
            return redirect()->intended('/aduan');
        } else {
            return back()->withErrors([
                'username' => 'Username atau password salah',
            ]);
        }
    }
}
