<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authcontroller;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lp1', function () {
    return view('lp1');
});

// Login Routes 
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', [Authcontroller::class, 'login'])->name('login');

//Register 
Route::get('/register', function () {
    return view('auth.register');
});

Route::post('/register', [Authcontroller::class, 'register'])->name('register');
