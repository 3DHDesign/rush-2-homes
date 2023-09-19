<div class="property-tabs">
    <ul class="prop-tab">
        <li>
            <a wire:navigate href="{{ route('user.dashboard.home') }}"
                class="dashboard-links {{ Route::is('user.dashboard.home') ? 'active' : '' }}">Profile</a>
        </li>
        <li>
            <a wire:navigate href="{{ route('user.dashboard.favorites') }}"
                class="dashboard-links {{ Route::is('user.dashboard.favorites') ? 'active' : '' }}">Favorites</a>
        </li>
        <li>
            <a class="dashboard-links">Chart</a>
        </li>
        <li>
            <a class="dashboard-links">Reset Password</a>
        </li>
    </ul>
</div>
