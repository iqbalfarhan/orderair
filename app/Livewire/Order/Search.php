<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Livewire\Component;

class Search extends Component
{
    public $cari;

    public function render()
    {
        return view('livewire.order.search', [
            'datas' => $this->cari ? Order::when($this->cari, function ($q) {
                return $q->where('id', $this->cari)
                    ->orWhere('name', "like", '%' . $this->cari . '%')
                    ->orWhere('address', "like", '%' . $this->cari . '%');
            })->get() : null
        ]);
    }
}
