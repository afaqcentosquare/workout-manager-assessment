<?php

namespace App\Http\Requests\V1\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'email',
                function ($attribute, $value, $fail) {
                    if (strtolower($value) === 'admin@example.com') {
                        $fail('The email address admin@example.com is not allowed.');
                    }
                }
            ],
            'password' => ['required']
        ];
    }
}
