<?php

namespace App\Livewire\Workouts;

use App\Http\Requests\V1\Workout\StoreWorkoutRequest;
use App\Services\WorkoutService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class CreateWorkout extends Component
{
    public string $title = '';

    public string $description = '';

    public string $trainer = '';

    public string $date = '';

    public int $slots = 0;

    public bool $is_active = false;

    protected function rules(): array
    {
        return (new StoreWorkoutRequest())->rules();
    }

    public function save(WorkoutService $workoutService): void
    {
        $this->validate();

        $requestData = [
            'title' => $this->title,
            'description' => $this->description,
            'trainer' => $this->trainer,
            'date' => $this->date,
            'slots' => $this->slots,
            'is_active' => $this->is_active,
        ];

        $workoutService->store($requestData);

        $this->redirect('/workouts');

    }

    public function render(): View
    {
        return view('livewire.workouts.create-workout');
    }
}
