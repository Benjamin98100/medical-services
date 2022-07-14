<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\adminController;



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

Route::get('/',[MainController::class,'index'])->name('main.index');
Route::get('Citas',[CitasController::class,'index'])->name('citas.index');
Route::get('admin',[adminController::class,'index'])
    ->middleware('auth.admin')
    ->name('admin.auth');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
