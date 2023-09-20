<div>
    @if (auth()->guard('client')->user())
        <ul class="nav header-navbar-rht">
            <li style="margin-left: 20px;">
                <a wire:click="logout" class="btn btn-primary"><i class="feather-user-minus"></i>Logout</a>
            </li>
            <li class="new-property-btn">
                <a href="{{ route('user.dashboard.home') }}">
                    Go to Dashboard
                </a>
            </li>
        </ul>
    @else
        <ul class="nav header-navbar-rht">

            <li style="margin-left: 20px;">
                <a wire:navigate href="{{ route('user.register') }}" class="btn btn-primary"><i
                        class="feather-user-plus"></i>Register</a>
            </li>
            <li>
                <a wire:navigate href="{{ route('user.account.login') }}" class="btn sign-btn"><i
                        class="feather-unlock"></i>Sign
                    In</a>
            </li>
        </ul>
    @endif
</div>
