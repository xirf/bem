<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reports;

class aduan extends Controller {
    public function index() {
        // check if user is logged in
        if (!session()->has('username')) {
            return redirect()->intended('/login');
        }


        $reports = Reports::where('id', '>', 0)
            ->orderBy('created_at', 'desc')
            ->take(20)
            ->get();

        return view('aduan', [
            'reports' => $reports
        ]);
    }

    public function store(Request $request) {

        if (!session()->has('username')) {
            return redirect()->intended('/login');
        }

        $request->validate([
            'anonim' => ['required'],
            'keluhan' => ['required'],
        ]);

        $reports = new Reports;
        $reports->name = "Anonim";
        $reports->content = $request->keluhan;
        $reports->picture = "A";
        $reports->save();

        return redirect()->intended('/aduan');
    }
}
