<?php

namespace App\Livewire\Auth;

use App\Http\Requests\V1\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Attributes\Layout;
use Livewire\Component;

class Login extends Component
{
    public string $email = '';
    public string $password = '';

    protected function rules(): array
    {
        return (new LoginRequest())->rules();
    }

    public function save(): void
    {
        $this->validate();

        $user = User::whereEmail($this->email)->first();

        if (! $user || ! Hash::check($this->password, $user->password)) {
            $this->addError('email', 'The provided credentials are incorrect.');
            return;
        }

        Auth::login($user);

        $this->redirect('/workouts');
    }

    #[Layout('components.layouts.guest')]
    public function render(): View
    {
        return view('livewire.auth.login');
    }
}
