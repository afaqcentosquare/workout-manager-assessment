<?php

namespace App\Livewire\Workouts;

use App\Http\Requests\V1\Workout\UpdateWorkoutRequest;
use App\Models\Workout;
use App\Services\WorkoutService;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class UpdateWorkout extends Component
{
    public int $workoutId;

    public string $title;

    public string $description;

    public string $trainer;

    public string $date;

    public int $slots;

    public bool $is_active;

    public function mount(Workout $workout): void
    {
        $this->workoutId = $workout->id;

        $this->title = $workout->title;
        $this->description = $workout->description;
        $this->trainer = $workout->trainer;
        $this->date = $workout->date;
        $this->slots = $workout->slots;
        $this->is_active = $workout->is_active;
    }

    protected function rules(): array
    {
        return (new UpdateWorkoutRequest())->rules();
    }

    public function update(WorkoutService $workoutService): void
    {
        $this->validate();

        $workout = Workout::findOrFail($this->workoutId);

        $requestData = [
            'title' => $this->title,
            'description' => $this->description,
            'trainer' => $this->trainer,
            'date' => $this->date,
            'slots' => $this->slots,
            'is_active' => $this->is_active,
        ];

        $workoutService->update($requestData, $workout);

        $this->redirect('/workouts');

    }

    public function render(): View
    {
        return view('livewire.workouts.update-workout');
    }
}
