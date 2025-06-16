<?php

namespace App\Http\Controllers\Api\V1\Workout;

use App\Http\Controllers\Controller;
use App\Http\Resources\V1\Workout\WorkoutResource;
use App\Models\Workout;
use App\Traits\ApiResponseTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ListWorkoutController extends Controller
{
    use ApiResponseTrait;

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        try {
            $filterByIsActive = $request->get('is_active', true);
            $filterByDate = $request->get('date');

            $workouts = Workout::whereUserId(Auth::id())
                ->whereIsActive($filterByIsActive)
                ->when($filterByDate, function ($query, $filterByDate) {
                    $query->where('date', $filterByDate);
                })
                ->paginate(10);

            $result = WorkoutResource::collection($workouts);
            return $this->sendResponseOk('Workouts retrieved successfully', $result);
        } catch (Exception $ex) {
            return $this->sendResponseInternalServerError($ex);
        }
    }
}
