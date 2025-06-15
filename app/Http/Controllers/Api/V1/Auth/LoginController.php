<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Auth\LoginRequest;
use App\Models\User;
use App\Traits\ApiResponseTrait;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use ApiResponseTrait;

    public function __invoke(LoginRequest $request): JsonResponse
    {
        try {
            $user = User::whereEmail($request->email)->first();
            if (!$user || !Hash::check($request->password, $user->password)) {
                return $this->sendResponseUnauthorized();
            }

            $token = $user->createToken('access_token');

            $result = [
                'token' => $token->plainTextToken,
            ];

            return $this->sendResponseOk('Login successfully', $result);
        } catch (Exception $ex) {
            return $this->sendResponseInternalServerError($ex);
        }
    }
}
