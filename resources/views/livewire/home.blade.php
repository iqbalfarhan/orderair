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

    @livewire('order.search')
</div>