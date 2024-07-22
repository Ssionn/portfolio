<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $cachePath = '/tmp/cache';
        $viewsPath = '/tmp/views';

        if (!is_dir($cachePath)) {
            mkdir($cachePath, 0755, true);
        }

        if (!is_dir($viewsPath)) {
            mkdir($viewsPath, 0755, true);
        }
    }
}
