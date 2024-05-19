<?php

namespace App\Providers;

use App\Models\Perusahaan;
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
        view()->share('perusahaan',
            Perusahaan::first());
    }
}
