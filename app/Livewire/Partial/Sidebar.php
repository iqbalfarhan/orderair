<?php

namespace App\Livewire\Partial;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Sidebar extends Component
{

    #[Computed]
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
        return view('livewire.partial.sidebar', [
            'datas' => Order::select('status')->get()
        ]);
    }
}
