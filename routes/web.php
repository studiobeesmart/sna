<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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

Route::get('/', function () {return view('signin');})->name('login')->middleware('guest');
Route::get('/reg', function () {return view('signup');});

Route::get('dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::post('snalogin', [LoginController::class,'userLogin']);
Route::post('snadaftar', [LoginController::class,'userRegister']);;
Route::get('snalogout', [LoginController::class,'userLogout']);

//Ajax Cek Ketersediaan Username
Route::post('espCekUser',[LoginController::class, 'espCekUser']);
//Ajax Cek Ketersediaan Email
Route::post('espCekEmail',[LoginController::class, 'espCekEmail']);
