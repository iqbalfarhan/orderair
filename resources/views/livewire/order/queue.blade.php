<div class="space-y-6">
    <div class="flex flex-col lg:flex-row justify-between gap-6">
        @livewire('partial.header', [
            'title' => 'Dalam antrian',
        ])
        <div class="flex flex-col lg:flex-row gap-2">
            <input type="text" class="input" placeholder="Cari antrian">
        </div>
    </div>

    <div class="overflow-x-auto bg-base-100 rounded shadow">
        <table class="table whitespace-nowrap">
            <thead class="border-b-4 border-base-200">
                <th>Antrian</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Waktu pesan</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>{{ $data->id }}</td>
                        <td>
                            <div class="flex flex-col">
                                <span>{{ $data->name }}</span>
                                <span class="text-xs">{{ $data->phone }}</span>
                            </div>
                        </td>
                        <td class="whitespace-normal">{{ $data->address }}</td>
                        <td>
                            <div class="flex flex-col">
                                <span class="text-sm">{{ $data->created_at->format('D, d F Y') }}</span>
                                <span class="text-xs">{{ $data->created_at->diffForHumans() }}</span>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-xs btn-success" wire:click.prevent="setprogress({{ $data->id }})" wire:confirm="Antrian ini akan di proses? bila OK status antrian akan berubah menjadi progress">
                                kirim
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>