<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Attributes\On;
use Livewire\Component;

class Show extends Component
{
    public ?Order $order;

    #[On('orderShow')]
    public function orderShow(Order $order)
    {
        $this->order = $order;
    }

    public function closeModal()
    {
        $this->reset('order');
    }

    public function render()
    {
        return view('livewire.order.show');
    }
}
