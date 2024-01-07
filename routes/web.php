<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
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

// for spa authentication
Route::prefix('auth')->group(function(){

    Route::post('/login', LoginController::class);
    // we can use this route bellow or we can create a new controller to handle logout operation
    // Route::get('/logout', [LoginController::class, 'logout']);
    Route::post('/logout' , LogoutController::class);

    Route::post('/register' , RegisterController::class);
});



// qmetz@example.org
// $2y$12$41Vad4fULFvM8klYum9rzuOStd/VCA4GIi1ylNWxqQEKtIJ1GMMdG