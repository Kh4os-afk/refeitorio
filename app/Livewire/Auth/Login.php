<?php

namespace App\Livewire\Auth;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule(['required','string', 'max:255'])]
    public $email;
    #[Rule(['required','string', 'max:255'])]
    public $password;
    public $remember = false;

    public function login()
    {
        $this->validate();
        if (!Auth::attempt(['email' => $this->email, 'password' => $this->password],$this->remember)) {
            return $this->addError('email','Usuario ou senha incoretos');
        }
        session()->regenerate();
        return redirect()->intended('dashboard');
    }

    public function render()
    {
        return view('livewire.auth.login')
            ->layout('components.layouts.login');
    }
}
