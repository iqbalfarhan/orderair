<?php

namespace App\Livewire\Widget;

use Livewire\Component;

class Orderitem extends Component
{
    public $title = "card title";
    public $number = 0;
    public $label = "card label";

    public function render()
    {
        return view('livewire.widget.orderitem');
    }
}
