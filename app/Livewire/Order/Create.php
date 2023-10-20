<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    #[Rule('required', message: 'Harus diisi')]
    public $name;

    #[Rule('required', message: 'Harus diisi')]
    public $phone;

    #[Rule('required', message: 'Harus diisi')]
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
