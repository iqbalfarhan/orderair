<?php

namespace App\Livewire\Setting;

use App\Models\Setting;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = [
        'reload' => '$refresh'
    ];

    public function deleteSetting(Setting $setting)
    {
        $setting->delete();
    }

    public function render()
    {
        return view('livewire.setting.index', [
            'datas' => Setting::get()
        ]);
    }
}
