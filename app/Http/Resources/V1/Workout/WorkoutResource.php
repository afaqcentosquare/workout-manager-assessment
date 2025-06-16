<?php

namespace App\Http\Resources\V1\Workout;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class WorkoutResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'trainer' => $this->trainer,
            'date' => $this->date,
            'slots' => $this->slots,
            'is_active' => $this->is_active
        ];
    }
}
