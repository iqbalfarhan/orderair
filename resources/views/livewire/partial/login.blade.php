<div>
    <input type="checkbox" id="loginModal" class="modal-toggle link" />
    <div class="modal">
        <form class="modal-box max-w-sm" wire:submit.prevent="login">
            <h3 class="text-lg font-bold">Login !</h3>
            <div class="py-4 space-y-2">
                <div class="form-control">
                    <input type="text" class="input @error('username') input-error @enderror bg-base-200" placeholder="Username" wire:model="username" />
                    @error('username')
                    <label for="" class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
                <div class="form-control">
                    <input type="password" class="input @error('password') input-error @enderror bg-base-200" placeholder="Password" wire:model="password" />
                    @error('password')
                    <label for="" class="label">
                        <span class="label-text-alt text-error">{{ $message }}</span>
                    </label>
                    @enderror
                </div>
            </div>
            <button class="btn btn-primary">login</button>
        </form>
        <label class="modal-backdrop" for="loginModal">Close</label>
    </div>
</div>
