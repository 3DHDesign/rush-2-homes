<div class="login-wrapper">
    <div class="loginbox">
        <div class="login-auth">
            <div class="login-auth-wrap">
                <h1>{{ __('login.user_login.login_title') }} <span
                        class="d-block">{{ __('login.user_login.login_subtitle') }}</span>
                </h1>
                <form>
                    <div class="form-group">
                        <label class="form-label">{{ __('login.user_login.email_label') }} <span>*</span></label>
                        <input type="email" wire:model.live="email" value="{{ old('email') }}" class="form-control"
                            placeholder="{{ __('login.user_login.email_placeholder') }}">
                        @error('email')
                            <p><small style="{{ __('login.user_login.error_color') }}">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ __('login.user_login.password_label') }} <span>*</span></label>
                        <div class="pass-group">
                            <input type="password" wire:model.live="password" class="form-control pass-input"
                                placeholder="{{ __('login.user_login.password_placeholder') }}">
                            <span class="fas fa-eye toggle-password"></span>
                        </div>
                        @error('password')
                            <p><small style="{{ __('login.user_login.error_color') }}">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <button wire:click.prevent="userLogin"
                        class="btn btn-outline-light w-100 btn-size submit-btn-registration">
                        <div wire:loading wire:target="userLogin">
                            <div class="lds-ring">
                                <div></div>
                                <div></div>
                                <div></div>
                                <div></div>
                            </div>
                        </div>
                        {{ __('login.user_login.login_button') }}
                    </button>
                    <div class="text-center dont-have">{{ __('login.user_login.no_account') }} <a
                            href="{{ route('user.register') }}">{{ __('login.user_login.register_link') }}</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
