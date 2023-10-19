<?php

namespace App\Livewire\Order;

use Livewire\Component;

class Search extends Component
{

    public $cari;
    public function render()
    {
        return view('livewire.order.search');
    }
}
