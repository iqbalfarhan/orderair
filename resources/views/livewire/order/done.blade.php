<div class="space-y-6">
    <div class="flex flex-col lg:flex-row justify-between gap-6">
        @livewire('partial.header', [
            'title' => 'Selesai pengiriman',
        ])
        <div class="flex gap-2">
            <input type="text" class="input w-full" placeholder="Cari antrian">
            @guest
                @livewire('partial.login')
            @endguest
        </div>
    </div>
    <div class="overflow-x-auto bg-base-100 rounded shadow">
        <table class="table whitespace-nowrap">
            <thead class="border-b-4 border-base-200">
                <th>Antrian</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Status</th>
                <th>Eviden</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>
                            <a href="{{ route('order.show', $data->id) }}" class="btn btn-ghost btn-circle">{{ $data->id }}</a>
                        </td>
                        <td>
                            <div class="flex flex-col">
                                <span>{{ $data->name }}</span>
                                <span class="text-xs">{{ $data->phone }}</span>
                            </div>
                        </td>
                        <td class="whitespace-normal">{{ $data->address }}</td>
                        <td>{{ $data->status_alias }}</td>
                        <td>
                            <div class="avatar">
                                <div class="w-24 rounded">
                                    <img src="{{ $data->image_url }}" alt="">
                                </div>
                            </div>
                        </td>
                        <td>
                            <button class="btn btn-xs btn-error" wire:click="deleteOrder({{ $data->id }})" wire:confirm="anda yakin akan menghapus antrian ini?">delete</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>