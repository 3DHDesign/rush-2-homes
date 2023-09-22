<div class="login-wrapper">
    <div class="loginbox">
        <div class="login-auth">

            <div class="login-auth-wrap">
                <h1>{{ __('registration.user_register.sign_up') }} <span
                        class="d-block">{{ __('registration.user_register.user_account') }}</span></h1>
                <form>
                    <div class="form-group">
                        <label class="form-label">{{ __('registration.user_register.name') }}<span>*</span></label>
                        <input type="text" wire:model.live="name" value="{{ old('name') }}" class="form-control"
                            placeholder="Enter Name">
                        @error('name')
                            <p><small style="color: red;">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ __('registration.user_register.email') }}<span>*</span></label>
                        <input type="email" wire:model.live="email" value="{{ old('email') }}" class="form-control"
                            placeholder="Enter Email">
                        @error('email')
                            <p><small style="color: red;">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">{{ __('registration.user_register.password') }}<span>*</span></label>
                        <div class="pass-group">
                            <input type="password" wire:model.live="password" class="form-control pass-input"
                                placeholder="Enter Password">
                            <span class="fas fa-eye toggle-password"></span>
                        </div>
                        @error('password')
                            <p><small style="color: red;">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label
                            class="form-label">{{ __('registration.user_register.confirm_password') }}<span>*</span></label>
                        <div class="pass-group">
                            <input type="password" wire:model.live="password_confirmation" class="form-control"
                                placeholder="Enter Confirm Password">
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
                        {{ __('registration.user_register.sign_up_button') }}
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

                    <div class="text-center dont-have">{{ __('registration.user_register.already_have_login') }} <a
                            wire:navigate
                            href="{{ route('user.account.login') }}">{{ __('registration.user_register.login_link') }}</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
