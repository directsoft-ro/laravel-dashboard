<?php

namespace Directsoft\Laravel\Dashboard;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class DashboardServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        $this->publishes([
            __DIR__.'/../config/dashboard.php' => config_path('dashboard.php'),
        ]);

        $this->publishes([
            __DIR__.'/../public' => public_path('vendor/dashboard'),
        ], 'public');

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'dashboard');

        Blade::componentNamespace('Directsoft\\Laravel\\Dashboard\\Views\\Components', 'dashboard');
    }
}
