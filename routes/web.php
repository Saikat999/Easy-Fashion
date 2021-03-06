<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

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
Route::get('/login',[AuthController::class,'index'])->name('login');
Route::get('/register',[AuthController::class,'registerpage'])->name('register');
Route::post('/check',[AuthController::class,'check'])->name('check');

Route::get('/product',[AuthController::class,'product'])->name('product');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');

//Admin
Route::get('/admin',[AdminController::class,'index']);
Route::post('/admin-login',[AdminController::class,'adminlogin'])->name('admin-login');
Route::get('/dashboard',[AdminController::class,'dashboard'])->name('dashboard');