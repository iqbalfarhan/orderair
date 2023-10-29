<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
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

    #[Rule('image', message: 'Harus berisi file gambar')]
    public $photo;

    public function simpan()
    {
        $valid = $this->validate([
            "name" => "required",
            "phone" => "required",
            "address" => "required"
        ]);

        if ($this->photo) {
            $this->validate([
                'photo' => "required",
            ]);

            $filename = $this->photo->hashName('orders');
            $makeImage = Image::make($this->photo)->fit(500)->encode('jpg', 80);

            if (Storage::put($filename, $makeImage)) {
                $valid['photo'] = $filename;
            }

        }

        Order::create($valid);

        $this->reset();

        return redirect()->route('order.queue');
    }

    public function render()
    {
        return view('livewire.order.create');
    }
}
