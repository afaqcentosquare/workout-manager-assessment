<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\V1\Auth\RegisterRequest;
use App\Http\Resources\V1\User\UserResource;
use App\Models\User;
use App\Traits\ApiResponseTrait;
use Exception;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    use ApiResponseTrait;

    public function __invoke(RegisterRequest $request): JsonResponse
    {
        try {
            $result = DB::transaction(function () use ($request) {
                $user = User::create([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                ]);

                return [
                    'user' => new UserResource($user),
                ];
            });
            return $this->sendResponseCreated('User Registered Successfully', $result);
        } catch (Exception $ex) {
            return $this->sendResponseInternalServerError($ex);
        }
    }
}
