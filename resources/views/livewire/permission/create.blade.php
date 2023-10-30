<div>
    <input type="checkbox" id="createModal" class="modal-toggle" wire:model.live="show" />
    <div class="modal">
        <form class="modal-box" wire:submit.prevent="simpan">
            <h3 class="font-bold text-lg">Tambah permission</h3>
            <div class="py-4">
                <div class="form-control">
                    <label class="label">
                        <span class="label-text">Permission name</span>
                        @error('name')
                            <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </label>
                    <input type="text" placeholder="Type here" class="input input-bordered" wire:model="name" />
                </div>
            </div>
            <div class="modal-action justify-between">
                <label for="createModal" class="btn">Close!</label>
                <button class="btn btn-primary">simpan</button>
            </div>
        </form>
    </div>
</div>