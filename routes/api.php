<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\Api\AuthApiToken\LoginController;
use App\Http\Controllers\Api\AuthApiToken\LogoutController;

use App\Http\Controllers\Api\AuthApiToken\RegisterController;

require __DIR__ . '/api/v1.php';

require __DIR__ . '/api/v2.php';

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//for api token authentication

Route::prefix('auth')->group(function(){

    Route::post('/login', LoginController::class);
    // we can use this route bellow or we can create a new controller to handle logout operation
    // Route::get('/logout', [LoginController::class, 'logout']);
    Route::post('/logout' , LogoutController::class)->middleware('auth:sanctum');

    Route::post('/register' , RegisterController::class);
});
