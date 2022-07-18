<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//      return view('welcome');
//  });

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('pesan/{id}', [App\Http\Controllers\PesanController::class,'index']);
Route::post('pesan/{id}', [App\Http\Controllers\PesanController::class,'pesan']);
Route::get('checkout', [App\Http\Controllers\PesanController::class,'check_out']);
Route::delete('checkout/{id}', [App\Http\Controllers\PesanController::class,'delete']);

Route::get('konfirmasi-check-out', [App\Http\Controllers\PesanController::class,'konfirmasi']);

Route::get('profile', [App\Http\Controllers\ProfileController::class,'index']);
Route::post('profle', [App\Http\Controllers\ProfileSController::class,'update']);

Route::get('history', [App\Http\Controllers\HistoryController::class,'index']);
Route::get('history/{id}', [App\Http\Controllers\PesanController::class,'detail']);