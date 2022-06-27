<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LogoutController;

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
Route::get('/register',[RegisterController::class,'show']);
Route::post('/register', [RegisterController::class, 'register']);
// Login
Route::get('/login',[LoginController::class,'show']);
Route::post('/login', [LoginController::class, 'login']);

Route::get('/home',[HomeController::class,'show']);
Route::get('/logout',[LogoutController::class,'logout']);

