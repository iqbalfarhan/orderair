<div class="card bg-base-100 shadow mx-auto max-w-lg">
    <div class="card-body">
        <h2 class="card-title">{{ $order->name }}</h2>

        <div class="py-6 space-y-4">
            <div class="flex flex-col">
                <span class="text-sm opacity-70">Nama pemesan</span>
                <h3 class="text-lg">{{ $order->name }}</h3>
            </div>
            <div class="flex flex-col">
                <span class="text-sm opacity-70">Nomor telpon</span>
                <h3 class="text-lg">{{ $order->phone }}</h3>
            </div>
            <div class="flex flex-col">
                <span class="text-sm opacity-70">Alamat pengiriman</span>
                <h3 class="text-lg">{{ $order->address }}</h3>
            </div>
            <div class="flex flex-col">
                <span class="text-sm opacity-70">Waktu pesan</span>
                <h3 class="text-lg">{{ $order->created_at->format("d M Y") }} ({{ $order->created_at->diffForHumans() }})</h3>
            </div>
        </div>

        <div class="card-actions">
            <a href="{{ url()->previous() }}" class="btn" wire:navigate>kembali</a>
        </div>
    </div>
</div>
