<div>
    <input type="checkbox" id="createModal" class="modal-toggle" wire:model.live="show" />
    <div class="modal">
        <form class="modal-box max-w-xl" wire:submit="simpan">
            <h3 class="font-bold text-lg">Tambah siswa</h3>
            <div class="py-4 grid lg:grid-cols-2 gap-x-6 gap-y-4">
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Nama lengkap</span>
                        @error('name')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </label>
                    <input type="text" class="input input-bordered @error('name') input-error @enderror" wire:model="name" placeholder="name" />
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Username login</span>
                        @error('username')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </label>
                    <input type="text" class="input input-bordered @error('username') input-error @enderror" wire:model="username" placeholder="username" />
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Login sebagai</span>
                        @error('role')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </label>
                    <select class="select select-bordered @error('role') select-error @enderror" wire:model="role">
                        <option value="">---</option>
                        @foreach ($roles as $rl)
                            <option value="{{ $rl }}">{{ $rl }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-control">
                    <label for="" class="label">
                        <span class="label-text">Password login</span>
                        @error('password')
                        <span class="label-text-alt text-error">{{ $message }}</span>
                        @enderror
                    </label>
                    <input type="text" class="input input-bordered @error('password') input-error @enderror" wire:model="password" placeholder="password" />
                </div>
            </div>
            <div class="modal-action justify-between">
                <label for="createModal" class="btn">Close!</label>
                <button class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>