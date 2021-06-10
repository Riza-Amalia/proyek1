<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\KontrolController;
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
    return view('welcome');
});

Route::get('login', function () {
    return view('login');
});

Route::resource('kesehatan', IndexController::class);
Route::resource('obat', ObatController::class);
Route::resource('dokter', DokterController::class);
Route::resource('kontrol', KontrolController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
