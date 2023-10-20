<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Show extends Component
{

    public Order $order;

    public function back()
    {
        return back();
    }

    public function render()
    {
        return view('livewire.order.show');
    }
}
