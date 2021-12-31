<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\registrocontrolador;
use App\Http\Controllers\seccionescontrolador;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/login',[seccionescontrolador::class,'create'])->name('login.index');

Route::get('/register',[registrocontrolador::class,'create'])->name('register.index');

