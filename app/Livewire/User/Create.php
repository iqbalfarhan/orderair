<?php

namespace App\Livewire\User;

use App\Models\Kelas;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Create extends Component
{
    use LivewireAlert;

    public $show = false;

    public $name;
    public $username;
    public $role = "user";
    public $password;

    public function simpan()
    {
        $valid = $this->validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required'
        ]);

        $valid['password'] = Hash::make($this->password);

        if ($new = User::create($valid)) {
            $new->assignRole($this->role);
            $this->alert('success', 'User berhasil di tambahkan');
            $this->reset();
        } else {
            $this->alert('error', 'User gagal di tambahkan');
        }
    }

    public function render()
    {
        return view('livewire.user.create', [
            'roles' => Role::whereNot('name', 'superadmin')->pluck('name'),
        ]);
    }
}