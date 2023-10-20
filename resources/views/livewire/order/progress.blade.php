<div class="space-y-6">
    <div class="flex flex-col lg:flex-row justify-between gap-6">
        @livewire('partial.header', [
            'title' => 'Dalam pengiriman',
        ])
        <div class="flex gap-2">
            <input type="text" class="input w-full" placeholder="Cari antrian">
        </div>
    </div>
    <div class="overflow-x-auto bg-base-100 rounded shadow">
        <table class="table whitespace-nowrap">
            <thead class="border-b-4 border-base-200">
                <th>Antrian</th>
                <th>Nama</th>
                <th>Alamat</th>
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
                        <td>{{ $data->address }}</td>
                        <td>
                            <div class="flex space-x-1">
                                <button class="btn btn-xs btn-primary" wire:click="setdone({{ $data->id }})" wire:confirm="Apakah anda sudah memastikan bahwa pemesanan ini sudah dikirimkan?">selesaikan</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>