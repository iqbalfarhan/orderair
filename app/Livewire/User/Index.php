<?php

namespace App\Livewire\User;

use App\Models\User;
use Livewire\Component;

class Index extends Component
{
    public $cari;

    protected $listeners = ['reload' => '$refresh'];

    public function mount()
    {
        // $this->kelas_id = auth()->user()->kelas_id ?? Kelas::first()->id;
    }

    public function render()
    {
        $datas = User::whereHas('roles', fn($q) => $q->whereNot('name', 'superadmin'))->get();

        return view('livewire.user.index', [
            'datas' => $datas,
        ]);
    }
}