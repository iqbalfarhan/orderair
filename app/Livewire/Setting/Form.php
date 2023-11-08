<?php

namespace App\Livewire\Setting;

use App\Models\Setting;
use Livewire\Attributes\On;
use Livewire\Component;

class Form extends Component
{
    public Setting $setting;

    public $show = false;
    public $setting_id;
    public $key;
    public $value;

    #[On('formSetting')]
    public function formSetting(Setting $setting)
    {
        $this->show = true;
        $this->setting = $setting;
        $this->setting_id = $setting->setting_id;

        $this->key = $setting->key;
        $this->value = $setting->value;
    }

    public function simpan()
    {
        $this->validate([
            'key' => 'required',
            'value' => 'required',
        ]);

        Setting::updateOrCreate([
            "key" => $this->key,
        ], [
            "value" => $this->value,
        ]);

        $this->reset();
        $this->dispatch('reload');
    }

    public function render()
    {
        return view('livewire.setting.form');
    }
}
