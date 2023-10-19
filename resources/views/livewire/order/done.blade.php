<div class="space-y-6">
    <div class="flex justify-between">
        @livewire('partial.header', [
            'title' => 'Selesai pengiriman',
        ])
        <div class="flex gap-2">
            <input type="text" class="input" placeholder="Cari antrian">
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
                        <td>{{ $data->status }}</td>
                        <td>
                            <div class="flex space-x-1">
                                <button class="btn btn-xs btn-success">detail</button>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>