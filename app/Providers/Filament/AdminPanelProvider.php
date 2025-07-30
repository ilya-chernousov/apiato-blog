<?php

namespace App\Providers\Filament;

use App\Ship\Parents\Providers\AdminPanelProviderParent;
use Filament\Http\Middleware\Authenticate;
use Filament\Http\Middleware\AuthenticateSession;
use Filament\Http\Middleware\DisableBladeIconComponents;
use Filament\Http\Middleware\DispatchServingFilamentEvent;
use Filament\Pages;
use Filament\Panel;
use Filament\Support\Colors\Color;
use Filament\Widgets;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
use Illuminate\Cookie\Middleware\EncryptCookies;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Routing\Middleware\SubstituteBindings;
use Illuminate\Session\Middleware\StartSession;
use Illuminate\View\Middleware\ShareErrorsFromSession;

class AdminPanelProvider extends AdminPanelProviderParent
{
    public function panel(Panel $panel): Panel
    {
        return $panel
            ->default()
            ->id('admin')
            ->path('admin')
            ->login()
            ->colors([
                'primary' => Color::Amber,
            ])
            ->discoverResources(in: app_path('Containers/AppSection/Admin/Resources'), for: 'App\\Containers\\AppSection\\Admin\\Resources')
            ->discoverPages(in: app_path('Containers/AppSection/Admin/Pages'), for: 'App\\Containers\\AppSection\\Admin\\Pages')
            ->pages([
                Pages\Dashboard::class,
            ])
            ->discoverWidgets(in: app_path('Containers/AppSection/Admin/Widgets'), for: 'App\\Containers\\AppSection\\Admin\\Widgets')
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
            ->authMiddleware([
                Authenticate::class,
            ]);
    }
}

// class AdminPanelProvider extends AdminPanelProviderParent
// {
//    public function panel(Panel $panel): Panel
//    {
//        return $panel
//            ->default()
//            ->id('admin')
//            ->path('admin')
//            ->login()
//            ->colors([
//                'primary' => Color::Amber,
//            ])
//            ->discoverResources(in: app_path('Filament/Resources'), for: 'App\\Filament\\Resources')
//            ->discoverPages(in: app_path('Filament/Pages'), for: 'App\\Filament\\Pages')
//            ->pages([
//                Pages\Dashboard::class,
//            ])
//            ->discoverWidgets(in: app_path('Filament/Widgets'), for: 'App\\Filament\\Widgets')
//            ->widgets([
//                Widgets\AccountWidget::class,
//                Widgets\FilamentInfoWidget::class,
//            ])
//            ->middleware([
//                EncryptCookies::class,
//                AddQueuedCookiesToResponse::class,
//                StartSession::class,
//                AuthenticateSession::class,
//                ShareErrorsFromSession::class,
//                VerifyCsrfToken::class,
//                SubstituteBindings::class,
//                DisableBladeIconComponents::class,
//                DispatchServingFilamentEvent::class,
//            ])
//            ->authMiddleware([
//                Authenticate::class,
//            ]);
//    }
// }
