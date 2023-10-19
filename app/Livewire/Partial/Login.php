<?php

namespace App\Livewire\Partial;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $username = 'komplek';
    public $password = 'telkom';

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
