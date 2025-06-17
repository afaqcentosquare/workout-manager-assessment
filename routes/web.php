<?php

use App\Http\Controllers\Web\Auth\LogoutController;
use App\Livewire\Auth\Login;
use App\Livewire\Auth\Register;
use App\Livewire\Workouts\CreateWorkout;
use App\Livewire\Workouts\ListWorkout;
use App\Livewire\Workouts\UpdateWorkout;
use Illuminate\Support\Facades\Route;

Route::get('/', Login::class)->name('login');

Route::get('/register', Register::class)->name('register');

Route::get('logout', LogoutController::class)->name('logout');

Route::middleware('auth')->group(function () {
    Route::prefix('workouts')->name('workouts.')->group(function () {
        Route::get('/', ListWorkout::class)->name('list');
        Route::get('/create', CreateWorkout::class)->name('create');
        Route::get('/update/{workout}', UpdateWorkout::class)->name('edit');
    });
});
