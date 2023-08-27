<?php

namespace App\Providers\Filament;

use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\PanelProvider;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\AuthenticateSession;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Awcodes\LightSwitch\LightSwitchPlugin;
use Awcodes\LightSwitch\Enums\Alignment;
use Filament\Forms\Components\FileUpload;
use Jeffgreco13\FilamentBreezy\BreezyCore;
use Illuminate\Validation\Rules\Password;
use App\Livewire\MyCustomComponent;

class AdminPanelProvider extends PanelProvider
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            // ->authGuard('customers')
            ->plugins([
                LightSwitchPlugin::make()
                ->position(Alignment::BottomCenter)
                ->enabledOn([
                    'auth.email',
                    'auth.login',
                    'auth.password',
                    'auth.profile',
                ]),
                BreezyCore::make()
                ->myProfileComponents([MyCustomComponent::class])
                ->myProfile(
                    shouldRegisterUserMenu: true, // Sets the 'account' link in the panel User Menu (default = true)
                    shouldRegisterNavigation: false, // Adds a main navigation item for the My Profile page (default = false)
                    hasAvatars: false, // Enables the avatar upload form component (default = false)
                    slug: 'my-profile' // Sets the slug for the profile page (default = 'my-profile')
                )
                ->passwordUpdateRules(
                    rules: [Password::default()->mixedCase()->uncompromised(3)], // you may pass an array of validation rules as well. (default = ['min:8'])
                    requiresCurrentPassword: true, // when false, the user can update their password without entering their current password. (default = true)
                )
                ->avatarUploadComponent(fn($fileUpload) => $fileUpload->disableLabel())
                // OR, replace with your own component
                ->avatarUploadComponent(fn() => FileUpload::make('myUpload')->disk('profile-photos')),
            ])
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'danger' => Color::Rose,
                'gray' => Color::Gray,
                'info' => Color::Blue,
                'primary' => '#0659b7',
                'success' => Color::Emerald,
                'warning' => Color::Orange,
                'primary' => [
                    50 => '238, 242, 255',
                    100 => '224, 231, 255',
                    200 => '199, 210, 254',
                    300 => '165, 180, 252',
                    400 => '129, 140, 248',
                    500 => '99, 102, 241',
                    600 => '79, 70, 229',
                    700 => '67, 56, 202',
                    800 => '55, 48, 163',
                    900 => '49, 46, 129',
                    950 => '30, 27, 75',
                ],
            ])
            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
            ->widgets([
                Widgets\AccountWidget::class,
                Widgets\FilamentInfoWidget::class,
            ])
            ->middleware([
                EncryptCookies::class,
                AddQueuedCookiesToResponse::class,
                StartSession::class,
                AuthenticateSession::class,
                ShareErrorsFromSession::class,
                VerifyCsrfToken::class,
                SubstituteBindings::class,
                DisableBladeIconComponents::class,
                DispatchServingFilamentEvent::class,
            ])
            ->databaseNotifications()
            ->databaseNotificationsPolling('5s')
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}
