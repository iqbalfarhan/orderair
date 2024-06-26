<div class="page-wrapper">
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

    <div class="table-wrapper">
        <table class="table">
            <thead class="border-b-4 border-base-200">
                <th>Antrian</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Pesanan berakhir</th>
                @can('order.showTransferImage')
                    <th>bukti transfer</th>
                @endcan
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>
                            <button wire:click="$dispatch('orderShow', {order: {{ $data->id }}})"
                                class="btn btn-circle">{{ $data->id }}</button>
                        </td>
                        <td>
                            <div class="flex flex-col">
                                <span>{{ $data->name }}</span>
                                <span class="text-xs">{{ $data->phone }}</span>
                            </div>
                        </td>
                        <td class="whitespace-normal">{{ Str::limit($data->address, 50) }}</td>
                        <td>
                            @if ($data->selesai_at)
                                <div class="flex flex-col">
                                    <span class="text-sm">{{ $data->selesai_at->format('D, d F Y') }}</span>
                                    <span class="text-xs">{{ $data->selesai_at->diffForHumans() }}</span>
                                </div>
                            @endif
                        </td>
                        @can('order.showTransferImage')
                            <td>
                                <button class="avatar"
                                    wire:click.prevent="$dispatch('showImage', ['{{ $data->transfer_url }}'])">
                                    <div class="w-12 rounded-lg">
                                        <img src="{{ $data->transfer_url }}" alt="">
                                    </div>
                                </button>
                            </td>
                        @endcan
                        <td>{{ $data->status_alias }}</td>
                        {{-- <td>
                            <button class="avatar" wire:click.prevent="$dispatch('showImage', ['{{ $data->image_url }}'])">
                                <div class="w-24 rounded-lg">
                                    <img src="{{ $data->image_url }}" alt="{{ $data->image_url }}">
                                </div>
                            </button>
                        </td> --}}
                        <td>
                            <div class="flex gap-1">
                                @can('order.edit')
                                    <a href="{{ route('order.edit', $data->id) }}"
                                        class="btn btn-xs btn-success btn-square">
                                        <x-tabler-edit class="w-4 h-4" />
                                    </a>
                                @endcan
                                @can('order.delete')
                                    <button class="btn btn-xs btn-error btn-square"
                                        wire:click="deleteOrder({{ $data->id }})"
                                        wire:confirm="anda yakin akan menghapus antrian ini?">
                                        <x-tabler-trash class="w-4 h-4" />
                                    </button>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
