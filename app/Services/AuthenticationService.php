<?php

namespace App\Services;

use App\Models\User;

class AuthenticationService
{
    public function register(array $data): User
    {
        return User::create($data);
    }
}
