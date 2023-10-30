<div>
    <input type="checkbox" id="editModal" class="modal-toggle" wire:model.live="show" />
    <div class="modal">
        <form class="modal-box max-w-sm" wire:submit.prevent="simpan">
            <h3 class="font-bold text-lg">Edit user</h3>
            <div class="py-4">
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Privilege</span>
                    </label>
                    <select type="text" class="select select-bordered" wire:model="role">
                        <option value="">---</option>
                        @foreach ($roles as $name)
                            <option value="{{ $name }}">{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="modal-action justify-between">
                <label for="editModal" class="btn">Close!</label>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>