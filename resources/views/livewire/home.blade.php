<div class="space-y-6">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="stats shadow w-full">
            <a href="{{ route('order.queue') }}" class="stat">
                <div class="stat-title">Masih antri</div>
                <div class="stat-value">{{ $datas->where('status', 'queue')->count() }}</div>
                <div class="stat-desc">Dalam antrian</div>
            </a>
        </div>
        <div class="stats shadow w-full">
            <a href="{{ route('order.progress') }}" class="stat">
                <div class="stat-title">On Progress</div>
                <div class="stat-value">{{ $datas->where('status', 'progress')->count() }}</div>
                <div class="stat-desc">Sedang diproses</div>
            </a>
        </div>
        <div class="stats shadow w-full">
            <a href="{{ route('order.done') }}" class="stat">
                <div class="stat-title">Selesai diantar</div>
                <div class="stat-value">{{ $datas->where('status', 'done')->count() }}</div>
                <div class="stat-desc">Selesai diantar</div>
            </a>
        </div>
        <div class="stats shadow w-full">
            <div class="stat">
                <div class="stat-title">Total pesanan</div>
                <div class="stat-value">{{ $datas->count() }}</div>
                <div class="stat-desc">Semua pesanan</div>
            </div>
        </div>
    </div>

    <div class="space-y-3">
        <h2 class="text-lg">
            Pencarian pesanan
        </h2>
        @livewire('order.search')
    </div>

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