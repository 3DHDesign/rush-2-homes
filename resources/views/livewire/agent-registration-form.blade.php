<div class="login-wrapper">
    <div class="loginbox">
        <div class="login-auth">
            <div class="login-auth-wrap">
                <h1>{{ __('registration.agent_register.sign_up') }} <span
                        class="d-block">{{ __('registration.agent_register.agent_account') }}</span></h1>
                <form>
                    <div class="form-group">
                        <label class="form-label">{{ __('registration.agent_register.name') }} <span>*</span></label>
                        <input type="text" wire:model.live="name" value="{{ old('name') }}" class="form-control"
                            placeholder="{{ __('registration.agent_register.name') }}">
                        @error('name')
                            <p><small style="color: red;">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ __('registration.agent_register.email') }} <span>*</span></label>
                        <input type="email" wire:model.live="email" value="{{ old('email') }}" class="form-control"
                            placeholder="{{ __('registration.agent_register.email') }}">
                        @error('email')
                            <p><small style="color: red;">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ __('registration.agent_register.password') }}
                            <span>*</span></label>
                        <div class="pass-group">
                            <input type="password" wire:model.live="password" class="form-control pass-input"
                                placeholder="{{ __('registration.agent_register.password') }}">
                            <span class="fas fa-eye toggle-password"></span>
                        </div>
                        @error('password')
                            <p><small style="color: red;">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ __('registration.agent_register.confirm_password') }}
                            <span>*</span></label>
                        <div class="pass-group">
                            <input type="password" wire:model.live="password_confirmation" class="form-control"
                                placeholder="{{ __('registration.agent_register.confirm_password') }}">
                        </div>
                        @error('password_confirmation')
                            <p><small style="color: red;">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <button wire:click.prevent="save"
                        class="btn btn-outline-light w-100 btn-size submit-btn-registration">
                        <div wire:loading wire:target="save">
                            <div class="lds-ring">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        {{ __('registration.agent_register.sign_up_button') }}
                    </button>

                    <div class="text-center dont-have">{{ __('registration.agent_register.already_have_login') }} <a
                            target="_blank" href="/admin">{{ __('registration.agent_register.login_link') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
