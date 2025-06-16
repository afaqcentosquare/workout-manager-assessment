<?php

namespace App\Services;

use App\Http\Requests\V1\Workout\StoreWorkoutRequest;
use App\Http\Requests\V1\Workout\UpdateWorkoutRequest;
use App\Models\Workout;
use Illuminate\Support\Facades\Auth;

class WorkoutService
{
    public function store(StoreWorkoutRequest $request): Workout
    {
        $data = array_merge($request->validated(), ['user_id' => Auth::id()]);

        return Workout::create($data);
    }

    public function update(UpdateWorkoutRequest $request, Workout $workout): bool
    {
        return $workout->update($request->validated());
    }
}
