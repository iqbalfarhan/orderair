<?php

namespace App\Livewire;

use App\Models\Order;
use Livewire\Component;

class Welcome extends Component
{
    public $cari;

    public function render()
    {
        $datas = Order::whereIn('status', ['queue', 'progress'])->when($this->cari, function ($q) {
            $q->where('id', $this->cari)
                ->orWhere('name', 'like', '%' . $this->cari . '%');
        })->get();

        return view('livewire.welcome', [
            'datas' => $datas
        ]);
    }
}
