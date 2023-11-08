<div class="space-y-6">
    <div class="flex flex-col lg:flex-row justify-between gap-6">
        @livewire('partial.header', [
            'title' => 'Pengaturan aplikasi',
        ])
        <span wire:loading>
            <span class="loading loading-sm"></span>
        </span>
        <div class="flex flex-col lg:flex-row gap-2">
            <label for="modalFormSetting" class="btn btn-active">
                <x-tabler-circle-plus class="w-5 h-5" />
                <span class="">Pengaturan</span>
            </label>
        </div>
    </div>

    <div class="overflow-x-auto bg-base-100 rounded shadow w-full max-w-2xl mx-auto">
        <table class="table whitespace-nowrap">
            <thead class="border-b-4 border-base-200">
                <th>Key</th>
                <th>Value</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->key }}</td>
                        <td>{{ $data->value }}</td>
                        <td>
                            <div class="flex gap-1">
                                <button class="btn btn-xs btn-success btn-square"
                                    wire:click.prevent="$dispatch('formSetting', [{{ $data->id }}])">
                                    <x-tabler-edit class="w-4 h-4" />
                                </button>
                                <button class="btn btn-xs btn-error btn-square"
                                    wire:click.prevent="deleteSetting({{ $data->id }})">
                                    <x-tabler-trash class="w-4 h-4" />
                                </button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('setting.form')
</div>
