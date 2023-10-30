<div>
    <input type="checkbox" id="showImage" class="modal-toggle" wire:model.live="show" />
    <div class="modal">
    <div class="modal-box">
        <div class="avatar">
            <div class="w-full">
                <img src="{{ $url }}" alt="">
            </div>
        </div>
        
        <div class="modal-action">
            <label for="showImage" class="btn">Close!</label>
        </div>
    </div>
    </div>
</div>
