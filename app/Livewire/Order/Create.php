<?php

namespace App\Livewire\Order;

use App\Models\Order;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    #[Rule('required', message: 'Harus diisi')]
    public $name;

    #[Rule('required', message: 'Harus diisi')]
    public $phone;

    #[Rule('required', message: 'Harus diisi')]
    public $address;

    #[Rule('image', message: 'Harus berisi file gambar')]
    public $buktibayar;

    public function simpan()
    {
        $valid = $this->validate([
            "name" => "required",
            "phone" => "required",
            "address" => "required"
        ]);

        if ($this->buktibayar) {
            $this->validate([
                'buktibayar' => "",
            ]);

            $filename = $this->buktibayar->hashName('transfers');
            $makeImage = Image::make($this->buktibayar)->fit(700)->encode('jpg', 80);

            if (Storage::put($filename, $makeImage)) {
                $valid['buktibayar'] = $filename;
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
