<?php

namespace App\Livewire\Jadwal;

use App\Models\Order;
use Illuminate\Support\Carbon;
use Livewire\Component;

class Index extends Component
{
    public $kirim_at;

    public function mount()
    {
        $this->kirim_at = date('Y-m-d');
    }

    public function nextDate()
    {
        $this->kirim_at = Carbon::parse($this->kirim_at)->addDay()->toDateString();
    }
    public function prevDate()
    {
        $this->kirim_at = Carbon::parse($this->kirim_at)->subDay()->toDateString();
    }

    public function render()
    {
        return view('livewire.jadwal.index', [
            'datas' => Order::whereIn('status', ['queue'])->where('kirim_at', $this->kirim_at)->get()
        ]);
    }
}
