<div class="space-y-6">
    <div class="flex justify-between items-center gap-6">
        @livewire('partial.header', [
            'title' => 'App user',
            'desc' => 'Akses fitur'
        ])

        <div>
            <label for="createModal" class="btn">
                <x-tabler-plus class="w-5 h-5" />
                <span class="hidden lg:block">create user</span>
            </label>
        </div>
    </div>

    <div>
        <input type="text" class="input" placeholder="Cari user" wire:model.live="cari">
    </div>

    <div class="overflow-x-auto bg-base-100 shadow rounded-lg">
        <table class="table whitespace-nowrap">
            <thead class="border-b-4 border-base-200">
                <th>ID</th>
                <th>Name</th>
                <th>Username</th>
                <th>Role</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->getRoleNames()->first() }}</td>
                        <td>
                            @can('user.edit')
                                <button class="btn btn-xs btn-success btn-square" wire:click="$dispatch('editUser', [{{ $data->id }}])">
                                    <x-tabler-edit class="w-4 h-4" />
                                </button>
                            @endcan
                            @can('user.delete')
                                <button class="btn btn-xs btn-error btn-square" wire:confirm="Anda yakin akan menhapus user ini" wire:click="deleteuser({{ $data->id }})">
                                    <x-tabler-trash class="w-4 h-4" />
                                </button>
                            @endcan
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('user.create')
    @livewire('user.edit')
</div>