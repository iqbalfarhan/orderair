<?php

namespace App\Livewire\Partial;

use Livewire\Component;

class Header extends Component
{

    public $title = "Aplikasi order air";
    public $desc = "telkom regioanl 6";

    public function render()
    {
        return view('livewire.partial.header');
    }
}
