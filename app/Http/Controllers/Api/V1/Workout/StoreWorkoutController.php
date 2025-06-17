<?php

namespace App\Http\Controllers\Api\V1\Workout;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Workout\StoreWorkoutRequest;
use App\Http\Resources\V1\Workout\WorkoutResource;
use App\Services\WorkoutService;
use App\Traits\ApiResponseTrait;
use Exception;

class StoreWorkoutController extends Controller
{
    use ApiResponseTrait;

    private WorkoutService $workoutService;

    public function __construct(WorkoutService $workoutService)
    {
        $this->workoutService = $workoutService;
    }

    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreWorkoutRequest $request)
    {
        try {
            $workout = $this->workoutService->store($request->validated());

            $result = new WorkoutResource($workout);
            return $this->sendResponseCreated('Workout created successfully', $result);
        } catch (Exception $ex) {
            return $this->sendResponseInternalServerError($ex);
        }
    }
}
