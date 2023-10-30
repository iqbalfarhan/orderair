<div class="space-y-6">
    <div class="flex justify-between items-center gap-6">
        @livewire('partial.header', [
            'title' => 'App Permission',
            'desc' => 'Akses fitur'
        ])

        <div>
            <label for="createModal" class="btn">
                <x-tabler-plus class="w-5 h-5" />
                <span class="hidden lg:block">create permission</span>
            </label>
        </div>
    </div>

    <div>
        <input type="text" class="input" placeholder="Cari permission" wire:model.live="cari">
    </div>

    <div class="overflow-x-auto bg-base-100 shadow rounded-lg">
        <table class="table whitespace-nowrap">
            <thead class="border-b-4 border-base-200">
                <th>Permissions</th>
                @foreach ($roles as $role)
                    <th>{{ $role->name }}</th>
                @endforeach
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($permissions as $permit)
                    <tr>
                        <td>{{ $permit->name }}</td>
                        @foreach ($roles as $role)
                            <td>
                                 <input type="checkbox" class="toggle toggle-sm" {{ $permit->hasRole($role->name) ? "checked" : '' }} wire:change.prevent="assignRole({{ $permit->id }}, '{{ $role->name }}')" />
                            </td>
                        @endforeach
                        <td>
                            <button class="btn btn-xs btn-error btn-square" wire:confirm="Anda yakin akan menhapus permission ini" wire:click="deletePermission({{ $permit->id }})">
                                <x-tabler-trash class="w-4 h-4" />
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('permission.create')
</div>