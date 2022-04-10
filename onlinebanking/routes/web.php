<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomController;
use App\Http\Controllers\BenController;

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
Route::get('/banking',[CustomController::class,'Banking']);
Route::post('/bankform',[CustomController::class,'bankForm']);


Route::get('/existing-user',[customController::class,'existingUser']);
Route::get('/existinghome',[customController::class,'existingHome']);

Route::get('/fundtransfer',[CustomController::class,'fundTransfer']);

Route::get('/fund-user',[CustomController::class,'fundUser']);

Route::get('/benificary',[CustomController::class,'Benificary']);

Route::get('/benificiarydetail',[BenController::class,'BenificaryDetail']);
Route::get('/benficiary-user',[CustomController::class,'benficiaryUser']);

Route::get('/ben-user',[BenController::class,'benUser']);

Route::get('/check-statement',[BenController::class,'checkStatement']);
Route::get('/checkuser',[BenController::class,'checkUser']);
Route::get('/checkstatement',[BenController::class,'Check']);
