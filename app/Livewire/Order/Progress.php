<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Progress extends Component
{
    public function setdone(Order $order)
    {
        $order->update([
            'status' => 'done'
        ]);

        $this->dispatch('reload');
        $this->render();
    }

    public function render()
    {
        return view('livewire.order.progress', [
            'datas' => Order::where('status', 'progress')->get()
        ]);
    }
}
