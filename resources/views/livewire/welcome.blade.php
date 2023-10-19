<div class="space-y-6" wire:poll>
    <div class="flex flex-col lg:flex-row justify-between gap-6">
        @livewire('partial.header', [
            'title' => 'Pesan air'
        ])
        <input type="text" class="input shadow" placeholder="Cari antrian" wire:model.live="cari">
    </div>
    <div class="overflow-x-auto bg-base-100 rounded shadow">
        <table class="table whitespace-nowrap">
            <thead class="border-b-4 border-base-200">
                <th>Antrian</th>
                <th>Nama</th>
                <th>Status</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>{{ $data->name }}</td>
                        <td>
                            <div class="badge badge-{{ $data->status_color }}">
                                {{ $data->status_alias }}
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>