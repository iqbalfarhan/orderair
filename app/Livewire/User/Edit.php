<?php

namespace App\Livewire\User;

use App\Models\User;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class Edit extends Component
{
    use LivewireAlert;

    public $user;
    public $show = false;
    public $role;

    #[On("editUser")]
    public function editUser(User $user)
    {
        $this->user = $user;
        $this->show = true;
    }

    public function simpan()
    {
        $this->validate([
            'role' => 'required'
        ]);

        $user = User::find($this->user->id);

        if ($user->syncRoles($this->role)) {
            $this->alert('success', 'Berhasil ganti privilege');
            $this->reset(
                'show'
            );
            $this->dispatch('reload');
        } else {
            $this->alert('error', 'Gagal ganti privilege');
        }
    }

    public function render()
    {
        return view('livewire.user.edit', [
            'roles' => Role::whereNot('name', 'superadmin')->pluck('name')
        ]);
    }
}