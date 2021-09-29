<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginControl;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\KaryawanController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TanamanController;

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
    return view('login\index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/nav', function () {
    return view('nav');
});

Route::get('/navbar', function () {
    return view('navbar');
});


Route::get('/login', [LoginControl::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginControl::class, 'authenticate']);
Route::get('/dashboard',[DashboardController::class, 'index']);

Route::get('/registration',[RegistrationController::class, 'index']);
Route::post('/registration',[RegistrationController::class, 'store']);

Route::get('/tanaman',[TanamanController::class, 'index']);

Route::get('/karyawan',[KaryawanController::class, 'index']);

Route::get('/supplier',[SupplierController::class, 'index']);




