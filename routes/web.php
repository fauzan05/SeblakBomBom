<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::post('login', [AuthController::class, 'auth']);
Route::post('register', [AuthController::class, 'register']);
Route::post('verification', [AuthController::class, 'verification']);
Route::get('login', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'registerForm']);
Route::get('dashboard', [ProductController::class, 'index']);
Route::get('logout', [AuthController::class, 'logout']);
Route::get('verification/{id}', [AuthController::class, 'verificationForm']);


