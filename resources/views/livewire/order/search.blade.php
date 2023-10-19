<div class="card bg-base-100 shadow">
    <div class="card-body">
        <div class="form-control">
            <input type="text" class="input bg-base-200" placeholder="Cari pesanan" wire:model.live="cari">
            <label for="" class="label">
                <span class="label-text-alt">Cari dengan nomor antrian, nama atau alamat</span>
            </label>
        </div>

        @if ($cari)
            {{ $dats->where('') }}
        @endif
    </div>
</div>