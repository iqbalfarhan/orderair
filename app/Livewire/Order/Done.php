<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Done extends Component
{

    public function deleteOrder(Order $order)
    {
        $order->delete();
    }

    public function render()
    {
        return view('livewire.order.done', [
            'datas' => Order::where('status', 'done')->get()
        ]);
    }
}
