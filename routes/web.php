<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;

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

Route::get ('/about',[HomeController::class,'index']);
Route::get ('/contact',[ContactController::class,'contact']);
Route::get ('/create',[UserController::class,'create']);
Route::get ('/users',[UserController::class,'index']);
Route::get ('/users/{id}',[UserController::class,'show']);
Route::get ('/users/{id}',[UserController::class,'delete']);

Route::get ('test', function()  {
    return "Welcome to Laravel Course";
});
