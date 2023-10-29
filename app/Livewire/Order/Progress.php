<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Progress extends Component
{

    protected $listeners = ['reload' => '$refresh'];
    
    public function render()
    {
        return view('livewire.order.progress', [
            'datas' => Order::where('status', 'progress')->get()
        ]);
    }
}
