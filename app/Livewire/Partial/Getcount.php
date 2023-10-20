<?php

namespace App\Livewire\Partial;

use App\Models\Order;
use Livewire\Attributes\On;
use Livewire\Component;

class Getcount extends Component
{
    public $status;

    #[On('reload')]
    public function updateCount()
    {
        $this->render();
    }

    public function render()
    {
        return view('livewire.partial.getcount', [
            'count' => $this->status ? Order::where('status', $this->status)->count() : 0
        ]);
    }
}
