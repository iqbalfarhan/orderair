<div class="space-y-6">
    <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="stats shadow w-full">
            <div class="stat">
                <div class="stat-figure opacity-50">
                    <x-icon name="hourglass" size="40" />
                </div>

                <div class="stat-title">Masih antri</div>
                <div class="stat-value">{{ $datas->where('status', 'queue')->count() }}</div>
                <div class="stat-desc">Dalam antrian</div>
            </div>
        </div>
        <div class="stats shadow w-full">
            <div class="stat">
                <div class="stat-figure opacity-50">
                    <x-icon name="garden-cart" size="40" />
                </div>
                <div class="stat-title">On Progress</div>
                <div class="stat-value">{{ $datas->where('status', 'progress')->count() }}</div>
                <div class="stat-desc">Sedang diproses</div>
            </div>
        </div>
        <div class="stats shadow w-full">
            <div class="stat">
                <div class="stat-figure opacity-50">
                    <x-icon name="checkbox" size="40" />
                </div>
                <div class="stat-title">Selesai diantar</div>
                <div class="stat-value">{{ $datas->where('status', 'done')->count() }}</div>
                <div class="stat-desc">Selesai diantar</div>
            </div>
        </div>
        <div class="stats shadow w-full">
            <div class="stat">
                <div class="stat-figure opacity-50">
                    <x-icon name="dashboard" size="40" />
                </div>
                <div class="stat-title">Total pesanan</div>
                <div class="stat-value">{{ $datas->count() }}</div>
                <div class="stat-desc">Semua pesanan</div>
            </div>
        </div>
    </div>

    @livewire('order.search')
</div>