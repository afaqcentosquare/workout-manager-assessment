<?php

namespace App\Livewire\Auth;

use App\Http\Requests\V1\Auth\RegisterRequest;
use App\Services\AuthenticationService;
use Illuminate\Contracts\View\View;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Register extends Component
{
    public string $name = '';
    public string $email = '';
    public string $password = '';

    protected function rules(): array
    {
        return (new RegisterRequest())->rules();
    }

    public function save(AuthenticationService $authenticationService): void
    {
        $this->validate();

        $requestData = [
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ];

        $authenticationService->register($requestData);

        session()->flash('status', 'User created successfully!');

        $this->redirect('/workouts');
    }

    #[Layout('components.layouts.guest')]
    public function render(): View
    {
        return view('livewire.auth.register');
    }
}
