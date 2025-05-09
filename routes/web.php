<?php 

use Illuminate\Support\Facades\Route;

// Route::get('/test', function () {
//     return view('welcome');
// });

Route::resource('/', App\Http\Controllers\AdminController::class);
Route::resource('/admin', App\Http\Controllers\AdminController::class);
Route::resource('/adduser', App\Http\Controllers\AddUserController::class);
Route::resource('/payment_methods', App\Http\Controllers\PaymentMethodController::class);
Route::resource('/jenis_pengirimans', App\Http\Controllers\JenisPengirimanController::class);
Route::resource('/distributors', App\Http\Controllers\DistributorController::class);
