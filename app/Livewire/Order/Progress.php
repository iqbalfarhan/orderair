<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Progress extends Component
{
    use LivewireAlert;

    protected $listeners = ['reload' => '$refresh'];

    public function setDone(Order $order)
    {
        $order->update([
            'status' => 'done'
        ]);

        $this->alert('success', 'Status order telah diubah jadi done');
    }

    public function render()
    {
        return view('livewire.order.progress', [
            'datas' => Order::where('status', 'progress')->get()
        ]);
    }
}
