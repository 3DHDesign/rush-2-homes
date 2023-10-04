<div>
    <div class="review-form">
        <input type="text" wire:model.live='name' class="form-control" placeholder="Your Name">
        @error('name')
            <p><small style="color: red;">{{ $message }}</small></p>
        @enderror
    </div>
    <div class="review-form">
        <input type="email" wire:model.live='email' class="form-control" placeholder="Your Email">
        @error('email')
            <p><small style="color: red;">{{ $message }}</small></p>
        @enderror
    </div>
    <div class="review-form">
        <input type="text" wire:model.live='number' class="form-control" placeholder="Your Phone Number">
        @error('number')
            <p><small style="color: red;">{{ $message }}</small></p>
        @enderror
    </div>
    <div class="review-form">
        <textarea rows="5" wire:model.live='description' placeholder="Yes, I'm Interested"></textarea>
        @error('description')
            <p><small style="color: red;">{{ $message }}</small></p>
        @enderror
    </div>
    <div class="review-form submit-btn">
        <button type="submit" class="btn-primary submit-btn-registration" wire:click.prevent="submitForm">
            <div wire:loading wire:target="submitForm">
                <div class="lds-ring">
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
            </div>
            Send Email
        </button>
    </div>
</div>
