<?php

namespace App\Livewire\Partial;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Sidebar extends Component
{
    public $queue = 0;
    public $progress = 0;
    public $done = 0;


    public function isActive($routename)
    {
        return Request::route()->getName() == $routename ? 'active' : '';
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function render()
    {
        return view('livewire.partial.sidebar');
    }
}
