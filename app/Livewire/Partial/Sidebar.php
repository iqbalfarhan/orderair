<?php

namespace App\Livewire\Partial;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Sidebar extends Component
{
    public function logout()
    {
        Auth::logout();
        return redirect()->route('welcome');
    }

    public function render()
    {
        return view('livewire.partial.sidebar', [
            'datas' => Order::select('status')->get()
        ]);
    }
}
