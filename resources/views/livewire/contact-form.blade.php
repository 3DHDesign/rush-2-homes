<div class="col-lg-6">
    <form wire:submit.prevent="sendMail">
        <div class="card">
            <div class="card-header">
                <h3>{{ __('contact.get_in_touch') }}</h3>
                <p style="margin-top: 20px;">{{ __('contact.tell_us_about_your_property') }}</p>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-12 col-12">
                        <div class="form-group">
                            <label>{{ __('contact.your_name') }}</label>
                            <input type="text" wire:model.live="name" class="form-control"
                                placeholder="{{ __('contact.your_name') }}">
                            @error('name')
                                <p><small style="color: red;">{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>{{ __('contact.phone_number') }}</label>
                            <input type="text" wire:model.live="number" class="form-control"
                                placeholder="{{ __('contact.enter_number') }}">
                            @error('number')
                                <p><small style="color: red;">{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="form-group">
                            <label>{{ __('contact.email_address') }}</label>
                            <input type="email" wire:model.live="email" class="form-control"
                                placeholder="{{ __('contact.enter_email') }}">
                            @error('email')
                                <p><small style="color: red;">{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            <label>{{ __('contact.subject') }}</label>
                            <input type="text" wire:model.live="subject" class="form-control"
                                placeholder="{{ __('contact.enter_subject') }}">
                            @error('subject')
                                <p><small style="color: red;">{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>{{ __('contact.description') }}</label>
                            <textarea class="form-control" wire:model.live="description" rows="14"
                                placeholder="{{ __('contact.description') }}"></textarea>
                            @error('description')
                                <p><small style="color: red;">{{ $message }}</small></p>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="submit-row">
                    <button type="submit" class="btn-primary">{{ __('contact.submit_enquiry') }}
                    </button>
                    <div wire:loading wire:target="sendMail">
                        <div class="lds-ring">
                            <div></div>
                            <div></div>
                            <div></div>
                            <div></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </form>
</div>
