<?php

namespace App\Http\Controllers\Api\V1\Workout;

use App\Http\Controllers\Controller;
use App\Models\Workout;
use App\Traits\ApiResponseTrait;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeleteWorkoutController extends Controller
{
    use ApiResponseTrait;

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, Workout $workout)
    {
        try {

            if ($workout->user_id !== Auth::id()) {
                return $this->sendResponseForbidden();
            }

            $workout->delete();
            return $this->sendResponseOk('Workout deleted successfully');
        } catch (Exception $ex) {
            return $this->sendResponseInternalServerError($ex);
        }
    }
}
