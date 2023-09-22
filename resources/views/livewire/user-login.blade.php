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
                            <p><small style="color: red;">{{ $message }}</small></p>
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
                            <p><small style="color: red;">{{ $message }}</small></p>
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
                    <div class="login-or">
                        <span class="span-or-log">{{ __('registration.agent_register.or') }}</span>
                    </div>

                    <div class="social-login">
                        <a href="{{ route('auth.google.login') }}"
                            class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img
                                    src="{{ asset('assets/img/icons/google.svg') }}" class="img-fluid"
                                    alt="Google"></span>{{ __('registration.user_register.sign_up_with_google') }}</a>
                    </div>
                    <div class="social-login">
                        <a href="{{ route('auth.facebook.login') }}"
                            class="mb-0 d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img
                                    src="{{ asset('assets/img/icons/facebook.svg') }}" class="img-fluid"
                                    alt="Facebook"></span>{{ __('registration.user_register.sign_up_with_facebook') }}</a>
                    </div>
                    <div class="text-center dont-have">{{ __('login.user_login.no_account') }} <a
                            href="{{ route('user.register') }}">{{ __('login.user_login.register_link') }}</a></div>
                </form>
            </div>
        </div>
    </div>
</div>
