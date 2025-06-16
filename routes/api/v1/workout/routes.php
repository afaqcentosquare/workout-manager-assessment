<?php

use App\Http\Controllers\Api\V1\Workout\DeleteWorkoutController;
use App\Http\Controllers\Api\V1\Workout\ListWorkoutController;
use App\Http\Controllers\Api\V1\Workout\StoreWorkoutController;
use App\Http\Controllers\Api\V1\Workout\UpdateWorkoutController;
use Illuminate\Support\Facades\Route;

Route::prefix('workouts')->group(function () {
    Route::get('/', ListWorkoutController::class);
    Route::post('/', StoreWorkoutController::class);
    Route::put('{workout}', UpdateWorkoutController::class);
    Route::delete('{workout}', DeleteWorkoutController::class);
});
