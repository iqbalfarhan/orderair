<?php

namespace App\Livewire\Permission;

use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Attributes\On;
use Livewire\Component;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class Index extends Component
{
    use LivewireAlert;
    protected $listeners = ['reload' => '$refresh'];

    public $cari;

    public function assignRole(Permission $permission, $role)
    {
        if ($permission->hasRole($role)) {
            $permission->removeRole($role);
        } else {
            $permission->assignRole($role);
        }

    }

    public function deleteRole(Role $role)
    {
        $role->delete();
        $this->alert('success', "Role deleted successfully");
    }

    public function deletePermission(Permission $permission)
    {
        // $permission->delete();
        $this->alert('success', "Permission deleted successfully");
    }

    public function render()
    {
        return view('livewire.permission.index', [
            'permissions' => Permission::when($this->cari, function ($q) {
                return $q->where('name', 'like', '%' . $this->cari . '%');
            })->orderBy('name')->get(),
            'roles' => Role::whereNot('name', 'superadmin')->get(),
        ]);
    }
}