<div class="card bg-base-100 mx-auto max-w-lg shadow">
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
                <input type="text" class="input @error('name') input-error @enderror bg-base-200" placeholder="Nama penesan" wire:model="name">
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">Nomor telpon</span>
                    @error('phone')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </label>
                <input type="phone" class="input @error('phone') input-error @enderror bg-base-200" placeholder="Nomor telpon" wire:model="phone">
            </div>
            <div class="form-control">
                <label for="" class="label">
                    <span class="label-text">Alamat</span>
                    @error('address')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    @enderror
                </label>
                <textarea type="text" class="textarea @error('address') textarea-error @enderror bg-base-200" placeholder="Alamat" wire:model="address"></textarea>
            </div>
        </div>
        <div class="card-actions">
            <button class="btn btn-primary">Simpan</button>
        </div>
    </form>
</div>