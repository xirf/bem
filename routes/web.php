<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\login;
use App\Http\Controllers\aduan;
use App\Http\Middleware\Authenticate;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () { return view('home'); });
Route::get('/kepengurusan', function () { return view('kepengurusan'); });
Route::get('/profil', function () { return view('profil'); });

// Login
Route::get('/login', [login::class, 'index'])->name('login');
Route::post('/login', [login::class, 'authenticate']);

// aduan use middleware
Route::get('/aduan', [aduan::class, 'index']);
Route::post('/aduan', [aduan::class, 'store']);