<?php

namespace App\Livewire\Partial;

use Livewire\Attributes\On;
use Livewire\Component;

class ShowImage extends Component
{
    public $show = false;
    public $url;

    #[On("showImage")]
    public function showImage($url)
    {
        $this->show = true;
        $this->url = $url ?? url('noimage.jpg');
    }

    public function render()
    {
        return view('livewire.partial.show-image');
    }
}
