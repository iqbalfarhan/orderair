<div class="card bg-base-100 shadow">
    <div class="card-body">
        <div class="form-control">
            <label for="" class="label">
                <span class="label-text">Cari antrian</span>
            </label>
            <input type="search" class="input bg-base-200 shadow" placeholder="Cari pesanan" wire:model.live="cari">
            <label for="" class="label">
                <span class="label-text-alt">Cari dengan nomor antrian, nama atau alamat</span>
            </label>
        </div>

        @if ($cari)
            <div class="overflow-x-auto bg-base-100 rounded shadow">
                <table class="table whitespace-nowrap">
                    <thead class="border-b-4 border-base-200">
                        <th>Antrian</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Waktu pesan</th>
                        <th>Status</th>
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
                                <td>
                                    <div class="flex flex-col">
                                        <span class="text-sm">{{ $data->created_at->format('D, d F Y') }}</span>
                                        <span class="text-xs">{{ $data->created_at->diffForHumans() }}</span>
                                    </div>
                                </td>
                                <td>
                                    {{ $data->status }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</div>