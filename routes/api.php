<?php

use App\Http\Middleware\ForceJsonResponse;
use Illuminate\Support\Facades\Route;


Route::middleware(ForceJsonResponse::class)
    ->group(function () {
        Route::prefix('v1')
            ->group(function () {
                require_once __DIR__ . '/api/v1/auth/routes.php';

                Route::middleware(['auth:sanctum'])
                    ->group(function () {
                        require_once __DIR__ . '/api/v1/workout/routes.php';
                    });
            });
    });
