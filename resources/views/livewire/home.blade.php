<div class="page-wrapper">
    <div class="grid md:grid-cols-4 gap-2 md:gap-4">
        <a href="{{ route('order.queue') }}">
            @livewire('widget.orderitem', [
                'title' => 'Mengantri',
                'number' => $datas->where('status', 'queue')->count(),
                'label' => 'Order dalam antrian',
            ])
        </a>
        <a href="{{ route('order.progress') }}">
            @livewire('widget.orderitem', [
                'title' => 'On Progress',
                'number' => $datas->where('status', 'progress')->count(),
                'label' => 'Proses dan pengiriman',
            ])
        </a>
        <a href="{{ route('order.done') }}">
            @livewire('widget.orderitem', [
                'title' => 'Sudah selesai',
                'number' => $datas->where('status', 'done')->count(),
                'label' => 'Order selesai diantar',
            ])
        </a>
        @livewire('widget.orderitem', [
            'title' => 'Semua order',
            'number' => $datas->count(),
            'label' => 'Semua status orderan',
        ])
    </div>

    @livewire('order.search')

    <div class="space-y-3">
        <h2 class="text-lg">
            Lainnya
        </h2>
        <div>
            <a href="{{ route('order.create') }}" class="btn btn-primary">
                <x-tabler-circle-plus class="w-4 h-4" />
                <span>tambah antrean</span>
            </a>
        </div>
    </div>
</div>
