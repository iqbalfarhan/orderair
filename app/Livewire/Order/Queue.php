<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Queue extends Component
{

    public function setprogress(Order $order)
    {
        $order->update([
            'status' => 'progress'
        ]);

        $this->render();
    }
    public function render()
    {
        return view('livewire.order.queue', [
            'datas' => Order::where('status', 'queue')->get()
        ]);
    }
}
