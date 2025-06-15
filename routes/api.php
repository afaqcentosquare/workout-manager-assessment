<?php

use App\Http\Middleware\ForceJsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');

Route::middleware(ForceJsonResponse::class)
    ->group(function () {
        Route::prefix('v1')
            ->group(function () {
                require_once __DIR__ . '/api/v1/auth/routes.php';
            });
    });
