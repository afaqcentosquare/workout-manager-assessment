<?php

namespace App\Http\Requests\V1\Workout;

use Illuminate\Foundation\Http\FormRequest;

class StoreWorkoutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
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
            'date' => ['required','date'],
            'slots' => ['required', 'integer'],
            'is_active' => ['required', 'boolean'],
        ];
    }
}
