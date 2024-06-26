<div class="page-wrapper">
    <div class="flex flex-col lg:flex-row justify-between gap-6">
        @livewire('partial.header', [
            'title' => 'Dalam antrian',
        ])
        <div class="flex flex-col lg:flex-row gap-2">
            <input type="text" class="input" placeholder="Cari antrian">
        </div>
    </div>

    <div class="table-wrapper">
        <table class="table">
            <thead class="border-b-4 border-base-200">
                <th>Antrian</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Waktu pesan</th>
                @can('order.showTransferImage')
                    <th>bukti transfer</th>
                @endcan
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
                        <td class="whitespace-normal">{{ $data->address }}</td>
                        <td>
                            <div class="flex flex-col">
                                <span class="text-sm">{{ $data->created_at->format('D, d F Y') }}</span>
                                <span class="text-xs">{{ $data->created_at->diffForHumans() }}</span>
                            </div>
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
                        <td>
                            <div class="flex gap-1">
                                @can('order.edit')
                                    <a href="{{ route('order.edit', $data->id) }}"
                                        class="btn btn-xs btn-success btn-square">
                                        <x-tabler-edit class="w-4 h-4" />
                                    </a>
                                @endcan
                                @can('order.setProgress')
                                    <button class="btn btn-xs btn-primary"
                                        wire:click.prevent="setprogress({{ $data->id }})"
                                        wire:confirm="Antrian ini akan di proses? bila OK status antrian akan berubah menjadi progress">
                                        proses
                                    </button>
                                @endcan
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    @livewire('order.show')
</div>
