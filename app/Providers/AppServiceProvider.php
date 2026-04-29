<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// 1. Importante: Agrega esta línea arriba
use Illuminate\Support\Facades\Schema;

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
        // 2. Agrega esta línea aquí
        Schema::defaultStringLength(191);
    }
}