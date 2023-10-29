<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class SetDone extends Component
{
    use WithFileUploads;

    #[Rule("required", "photo harus diisi")]
    public $photo;
    
    public $show;

    public $order_id;

    #[On('setDone')]
    public function getSetDone(Order $order){
        $this->order_id = $order->id;
        $this->show = true;
    }
    

    public function simpan(){
        $valid = $this->validate([
            'photo' => 'required',
            'order_id' => 'required',
            'show' => 'required',
        ]);

        if ($this->photo) {
            $this->validate([
                'photo' => "image",
            ]);

            $filename = $this->photo->hashName('orders');
            $makeImage = Image::make($this->photo)->fit(500)->encode('jpg', 80);

            if (Storage::put($filename, $makeImage)) {
                $valid['photo'] = $filename;
                $valid['status'] = 'done';
            }

        }

        Order::find($this->order_id)->update($valid);

        $this->dispatch('reload');
        $this->reset();
        $this->render();
    }

    public function render()
    {
        return view('livewire.order.set-done');
    }
}
