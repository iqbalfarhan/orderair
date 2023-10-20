<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Create extends Component
{

    public $name;
    public $phone;
    public $address;

    public function simpan()
    {
        $valid = $this->validate([
            "name" => "required",
            "phone" => "required",
            "address" => "required"
        ]);

        Order::create($valid);

        $this->reset();

        return redirect()->route('order.queue');
    }

    public function render()
    {
        return view('livewire.order.create');
    }
}
