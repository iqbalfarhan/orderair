<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class Home extends Component
{
    public $cari;

    public function render()
    {
        return view('livewire.home', [
            'datas' => Order::get()
        ]);
    }
}
