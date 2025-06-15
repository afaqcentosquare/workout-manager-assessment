<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Traits\ApiResponseTrait;
use Exception;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    use ApiResponseTrait;

    public function __invoke(Request $request)
    {
        try {
            $request->user()->currentAccessToken()->delete();
            return $this->sendResponseOk('User logged out successfully');
        } catch (Exception $ex) {
            return $this->sendResponseInternalServerError($ex);
        }
    }
}
