<div class="space-y-6">
    <div class="flex flex-col lg:flex-row justify-between gap-6">
        @livewire('partial.header', [
            'title' => 'Jadwal pengiriman',
        ])
        <div class="flex gap-2">
            <input type="date" class="input shadow w-full" placeholder="Cari antrian" wire:model.live="kirim_at">
        </div>
    </div>

    <div class="flex justify-between">
        <button class="btn btn-ghost" wire:click="prevDate">
            <x-tabler-chevron-left class="w-4 h-4" />
            <span>Prev</span>
        </button>
        <button class="btn bg-ghost">
            <span wire:loading>
                <span class="loading loading-xs"></span>
            </span>
            {{ date('d F Y', strtotime($kirim_at)) }}
        </button>
        <button class="btn btn-ghost" wire:click="nextDate">
            <span>Next</span>
            <x-tabler-chevron-right class="w-4 h-4" />
        </button>
    </div>

    <div class="overflow-x-auto bg-base-100 shadow rounded">
        <table class="table">
            <thead class="border-b-4 border-base-200">
                <th>Antrian</th>
                <th>Kepada</th>
                <th>Alamat</th>
                <th>Staus</th>
            </thead>
            <tbody>
                @foreach ($datas as $data)
                    <tr>
                        <td>
                            <a href="{{ route('order.show', $data->id) }}" class="btn btn-ghost btn-circle">
                                {{ $data->id }}
                            </a>
                        </td>
                        <td>
                            <div class="flex flex-col">
                                <span>{{ $data->name }}</span>
                                <span class="text-xs">{{ $data->phone }}</span>
                            </div>
                        </td>
                        <td>{{ $data->address }}</td>
                        <td>{{ $data->status_alias }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
