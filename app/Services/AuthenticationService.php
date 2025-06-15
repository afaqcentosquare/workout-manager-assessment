<?php

namespace App\Services;

use App\Http\Requests\V1\Auth\RegisterRequest;
use App\Models\User;

class AuthenticationService
{
    public function register(RegisterRequest $request): User
    {
        return User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    }
}
