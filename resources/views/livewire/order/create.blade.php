<div class="page-wrapper max-w-lg">
    <div class="card">
        <form class="card-body" wire:submit.prevent="simpan">
            <h3 class="card-title">Tambah antrian</h3>
            <div class="py-4 space-y-4">
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Nama pemesan</span>
                        @error('name')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </label>
                    <input type="text" class="input @error('name') input-error @enderror bg-base-200"
                        placeholder="Nama penesan" wire:model="name">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Nomor telpon</span>
                        @error('phone')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </label>
                    <input type="phone" class="input @error('phone') input-error @enderror bg-base-200"
                        placeholder="Nomor telpon" wire:model="phone">
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Bukti transfer</span>
                        @error('buktibayar')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </label>
                    <input type="file" class="file-input @error('buktibayar') file-input-error @enderror bg-base-200"
                        placeholder="Nomor telpon" wire:model="buktibayar" accept="iamge/*">
                    @if ($buktibayar)
                        <div class="avatar">
                            <div class="w-56 rounded-lg">
                                <img src="{{ $buktibayar->temporaryUrl() }}" alt="">
                            </div>
                        </div>
                    @endif
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Alamat</span>
                        @error('address')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </label>
                    <textarea type="text" class="textarea @error('address') textarea-error @enderror bg-base-200" placeholder="Alamat"
                        wire:model="address"></textarea>
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Rencana pengiriman air</span>
                    </label>
                    <input type="date" class="input @error('kirim_at') input-error @enderror bg-base-200"
                        wire:model.live="kirim_at">
                    @error('kirim_at')
                        <label for="" class="label">
                            <span class="label-text text-error">
                                Pengiriman tanggal {{ date('d F Y', strtotime($kirim_at)) }} telah mencapai batas (6
                                pengiriman
                                perhari)
                            </span>
                        </label>
                    @enderror
                </div>

            </div>
            <div class="card-actions">
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>

</div>
