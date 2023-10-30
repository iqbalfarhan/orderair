<?php

namespace App\Livewire\Permission;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Spatie\Permission\Models\Permission;

class Create extends Component
{

    use LivewireAlert;
    public $name;
    public $show = false;

    public function simpan()
    {
        $valid = $this->validate([
            'name' => 'required'
        ]);

        if (Permission::create($valid)) {
            $this->alert('success', 'Berhasil menambahkan permission');
            $this->dispatch('reload');
            $this->reset();
        } else {
            $this->alert('error', 'Gagal menambahkan permission');
        }
    }

    public function render()
    {
        return view('livewire.permission.create');
    }
}