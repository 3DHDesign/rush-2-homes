<div class="login-wrapper">
    <div class="loginbox">
        <div class="login-auth">

            <div class="login-auth-wrap">
                <h1>Signup! <span class="d-block"> New User Account.</span></h1>
                <form>
                    <div class="form-group">
                        <label class="form-label">Name <span>*</span></label>
                        <input type="text" wire:model.live="name" value="{{ old('name') }}" class="form-control"
                            placeholder="Enter Name">
                        @error('name')
                            <p><small style="color: red;">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Email <span>*</span></label>
                        <input type="email" wire:model.live="email" value="{{ old('email') }}" class="form-control"
                            placeholder="Enter Email">
                        @error('email')
                            <p><small style="color: red;">{{ $message }}</small></p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password <span>*</span></label>
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
                        <label class="form-label">Confirm Password <span>*</span></label>
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
                        Sign
                        Up
                    </button>
                    {{-- <div class="login-or">
                        <span class="span-or-log">Or, Sign up with your email</span>
                    </div> --}}
                    {{-- 
                    <div class="social-login">
                        <a href="#"
                            class="d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img
                                    src="{{ asset('assets/img/icons/google.svg') }}" class="img-fluid"
                                    alt="Google"></span>Sign
                            up with Google</a>
                    </div>
                    <div class="social-login">
                        <a href="#"
                            class="mb-0 d-flex align-items-center justify-content-center form-group btn google-login w-100"><span><img
                                    src="{{ asset('assets/img/icons/facebook.svg') }}" class="img-fluid"
                                    alt="Facebook"></span>Sign
                            up with Facebook</a>
                    </div> --}}

                    <div class="text-center dont-have">Already have login ? <a
                            href="{{ route('user.account.login') }}">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
