<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Auth\RegisterRequest;
use App\Http\Resources\V1\User\UserResource;
use App\Services\AuthenticationService;
use App\Traits\ApiResponseTrait;
use Exception;
use Illuminate\Http\JsonResponse;

class RegisterController extends Controller
{
    use ApiResponseTrait;

    private AuthenticationService  $authenticationService;

    public function __construct(AuthenticationService  $authenticationService)
    {
        $this->authenticationService = $authenticationService;
    }

    public function __invoke(RegisterRequest $request): JsonResponse
    {
        try {
            $user = $this->authenticationService->register($request->validated());

            $result = new UserResource($user);
            return $this->sendResponseCreated('User Registered Successfully', $result);
        } catch (Exception $ex) {
            return $this->sendResponseInternalServerError($ex);
        }
    }
}
