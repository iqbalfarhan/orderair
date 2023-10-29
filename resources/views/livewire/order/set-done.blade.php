<div>
    <input type="checkbox" id="modalSetDone" class="modal-toggle" wire:model.live="show" />
    <div class="modal">
        <form class="modal-box" wire:submit.prevent="simpan">
            <h3 class="font-bold text-lg">Upload bukti pengiriman</h3>
            <div class="py-4">
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Bukti pengiriman</span>
                    </label>
                    <input type="file" class="file-input @error('photo') file-input-error @enderror" wire:model.live='photo' accept="image/*">
                    @error('photo')
                    <label for="" class="label">
                        <span class="label-text text-sm">Photo bukti pengiriman harus diisi</span>
                    </label>
                    @enderror

                    @if ($photo)
                        <div class="avatar">
                            <div class="w-24 rounded">
                                <img src="{{ $photo->temporaryUrl() }}" alt="">
                            </div>
                        </div>
                    @endif
                </div>
            </div>
            <div class="modal-action justify-between">
                <label for="modalSetDone" class="btn">Close!</label>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
