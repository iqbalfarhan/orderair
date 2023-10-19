<div>
    <input type="checkbox" id="loginModal" class="modal-toggle link" />
    <div class="modal">
        <form class="modal-box max-w-sm" wire:submit.prevent="login">
            <h3 class="text-lg font-bold">Login !</h3>
            <div class="py-4 space-y-2">
                <div class="form-control">
                    <input type="text" class="input bg-base-200" placeholder="Username" wire:model="username">
                </div>
                <div class="form-control">
                    <input type="password" class="input bg-base-200" placeholder="Username" wire:model="username">
                </div>
            </div>
            <button class="btn btn-primary">login</button>
        </form>
        <label class="modal-backdrop" for="loginModal">Close</label>
    </div>
</div>
