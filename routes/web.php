<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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
Route::post('logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/', [AuthController::class, 'home']);
Route::get('/register', [AuthController::class, 'registrationForm']);
Route::get('/login', [AuthController::class, 'loginForm']);
Route::get('/verification/{user}/{token}', [AuthController::class, 'verification']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/hm', [AuthController::class, 'hm']);
Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');

Route::get('/send-sms', [AuthController::class, 'index']);