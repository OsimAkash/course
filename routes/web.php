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
Route::get('/about', function(){
    return 'Welcome to about page';

});
Route::get('/users',[UserController::class,'index']);
Route::get('users/create',[UserController::class,'create']);
Route::post('/users',[UserController::class,'store']);
Route::put('/users',[UserController::class,'update']);
Route::patch('/users',[UserController::class,'update_Name']);
Route::delete('/users',[UserController::class,'delete']);
// Route::get ('/about',[HomeController::class,'index']);
// Route::get ('/contact',[ContactController::class,'contact']);
// Route::get ('/create',[UserController::class,'create']);
// Route::get ('/users',[UserController::class,'index']);
// Route::get ('/users/{id}',[UserController::class,'show']);
// Route::get ('/users/{id}/delete',[UserController::class,'delete']);
// Route::get ('/users/{id}/edit',[UserController::class,'edit']);

// Route::get ('test', function()  {
//     return "Welcome to Laravel Course";
// });
Route::redirect('/test', '/test-any');
Route::any('test-any', function(){
return 'I am from any';
});