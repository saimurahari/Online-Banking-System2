<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;

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
Route::get('/login',[CustomController::class,'login']);
Route::get('/registration',[CustomController::class,'registration']);
Route::post('/register-user',[customController::class,'registerUser'])->name
('register-user');
Route::post('/login-user',[customController::class,'loginUser'])->name('login-user');
Route::get('/dashboard',[customController::class,'dashboard']);
Route::get('/logout',[CustomController::class,'logout']);

Route::get('/new-bank-account',[CustomController::class,'newBank']);
