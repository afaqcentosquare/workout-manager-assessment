<?php

namespace App\Http\Controllers\Api\V1\Workout;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Workout\UpdateWorkoutRequest;
use App\Models\Workout;
use App\Services\WorkoutService;
use App\Traits\ApiResponseTrait;
use Exception;

class UpdateWorkoutController extends Controller
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
    public function __invoke(UpdateWorkoutRequest $request, Workout $workout)
    {
        try {
            $isUpdated = $this->workoutService->update($request, $workout);

            if ($isUpdated) {
                return $this->sendResponseOk('Workout updated successfully');
            } else {
                return $this->sendResponseBadRequest('Workout not updated. Something went wrong');
            }
        } catch (Exception $ex) {
            return $this->sendResponseInternalServerError($ex);
        }
    }
}
