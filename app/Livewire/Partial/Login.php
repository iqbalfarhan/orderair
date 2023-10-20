<?php

namespace App\Livewire\Partial;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Login extends Component
{
    #[Rule('required', message: 'Username harus diisi')]
    public $username;

    #[Rule('required', message: 'Password harus diisi')]
    public $password;

    public function login()
    {
        $valid = $this->validate([
            "username" => ["required", "string", ""],
            "password" => ["required", "string", ""],
        ]);

        if (Auth::attempt($valid)) {
            return redirect()->route('home');
        }
    }

    public function render()
    {
        return view('livewire.partial.login');
    }
}
