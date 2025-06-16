<?php

namespace App\Http\Requests\V1\Workout;

use Illuminate\Foundation\Http\FormRequest;

class UpdateWorkoutRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => ['required', 'string', 'min:3', 'max:255'],
            'description' => ['required', 'string', 'min:3', 'max:255'],
            'trainer' => ['required', 'string', 'min:3', 'max:50'],
            'date' => ['required', 'date_format:Y-m-d H:i:s'],
            'slots' => ['required', 'integer'],
            'is_active' => ['required', 'boolean'],
        ];
    }
}
