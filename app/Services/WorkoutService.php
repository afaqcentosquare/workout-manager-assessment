<?php

namespace App\Services;

use App\Models\Workout;
use Illuminate\Support\Facades\Auth;

class WorkoutService
{
    public function store(array $data): Workout
    {
        $data = array_merge($data, ['user_id' => Auth::id()]);

        return Workout::create($data);
    }

    public function update(array $data, Workout $workout): bool
    {
        return $workout->update($data);
    }
}
