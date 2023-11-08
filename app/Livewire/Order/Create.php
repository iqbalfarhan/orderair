<?php

namespace App\Livewire\Order;

use App\Models\Order;
use App\Models\Setting;
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

    #[Rule('date', message: 'Harus dalam format YYYY-MM-DD')]
    public $kirim_at;

    public function updatedKirimAt($kirim_at)
    {
        $limit = Setting::where('key', 'LIMIT_KIRIM_PER_HARI')->first()->value;
        $count = Order::where('kirim_at', $kirim_at)->count();

        if ($count > $limit) {
            $this->addError('kirim_at', 'Out of limit');
        }
    }

    public function simpan()
    {
        $valid = $this->validate([
            "name" => "required",
            "phone" => "required",
            "address" => "required",
            "kirim_at" => ""
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
