<?php

namespace App\Livewire\Workouts;

use App\Models\Workout;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Layout;
use Livewire\Component;

class ListWorkout extends Component
{
    public $name;

    public $search = '';

    public bool $showModal = false;
    public ?int $deleteId = null;

    public function mount(): void
    {
        $this->name = Auth::user()->name;
    }

    public function confirmDelete($id): void
    {
        $this->deleteId = $id;
        $this->showModal = true;
    }
    public function delete(): void
    {
        Workout::findOrFail($this->deleteId)->delete();

        $this->reset(['showModal', 'deleteId']);
    }

    #[Layout('components.layouts.app')]
    public function render(): View
    {
        return view('livewire.workouts.list-workout',[
            'workouts' => Workout::search($this->search)->get()
        ]);
    }
}
