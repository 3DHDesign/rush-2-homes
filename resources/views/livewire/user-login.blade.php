<div class="login-wrapper">
    <div class="loginbox">
        <div class="login-auth">

            <div class="login-auth-wrap">
                <h1>Login! <span class="d-block"> to your user account.</span></h1>
                <form>
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
                        Login
                    </button>

                    <div class="text-center dont-have">You don't have an account ? <a
                            href="{{ route('user.register') }}">Register</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
