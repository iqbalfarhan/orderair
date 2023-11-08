<div>
    <input type="checkbox" id="modalFormSetting" class="modal-toggle" wire:model.live="show" />
    <div class="modal">
        <form class="modal-box" wire:submit.prevent="simpan">
            <h3 class="font-bold text-lg">Hello!</h3>
            <div class="py-4 space-y-4">
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Key</span>
                    </label>
                    <input type="text" class="input input-bordered @error('key') input-error @enderror"
                        placeholder="Setting key" wire:model="key" />
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">value</span>
                    </label>
                    <input type="text" class="input input-bordered @error('value') input-error @enderror"
                        placeholder="Setting value" wire:model="value" />
                </div>
            </div>
            <div class="modal-action justify-between">
                <label for="modalFormSetting" class="btn">Close!</label>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
