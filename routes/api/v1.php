<?php

use App\Http\Controllers\Api\V1\TaskController;
use App\Http\Controllers\Api\V1\CompleteTaskController;

use Illuminate\Support\Facades\Route;




Route::prefix('v1')->group(function(){

    Route::apiResource('/tasks', TaskController::class); // this will create four routes with (get, post, put and delete methods)
    Route::patch('/tasks/{task}/completed', CompleteTaskController::class); // this create a patch method that partially update data
});



