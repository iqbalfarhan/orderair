<div>
    <input type="checkbox" class="modal-toggle" @checked($order ? true : false) />
    <div class="modal">
        <div class="modal-box">
            <h2 class="font-bold text-lg">Detail pemesanan</h2>
            <div class="py-6 space-y-4">
                <div class="flex flex-col">
                    <span class="text-sm opacity-50">Nama pemesan</span>
                    <h3 class="text-lg">{{ $order?->name }}</h3>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm opacity-50">Nomor telpon</span>
                    <h3 class="text-lg">{{ $order?->phone }}</h3>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm opacity-50">Alamat pengiriman</span>
                    <h3 class="text-lg">{{ $order?->address }}</h3>
                </div>
                <div class="flex flex-col">
                    <span class="text-sm opacity-50">Waktu pesan</span>
                    <h3 class="text-lg">{{ $order?->created_at?->format('d M Y') }}
                        ({{ $order?->created_at?->diffForHumans() }})</h3>
                </div>
            </div>

            <div class="modal-actions">
                <button wire:click="closeModal" class="btn">Tutup</button>
            </div>
        </div>
    </div>
</div>
