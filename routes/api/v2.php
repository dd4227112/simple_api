<?php

// use App\Http\Controllers\Api\V1\TaskController;

use App\Http\Controllers\Api\V2\TaskController;
use App\Http\Controllers\Api\V2\CompleteTaskController;
use Illuminate\Support\Facades\Route;



 // protect our api request using sanctum middleware 
Route::middleware('auth:sanctum')->prefix('v2')->group(function(){

    Route::apiResource('/tasks', TaskController::class); // this will create four routes with (get, post, put and delete methods)
    Route::patch('/tasks/{task}/completed', CompleteTaskController::class); // this create a patch method that partially update data
});

