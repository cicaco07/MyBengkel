<?php

namespace App\Providers;

use Carbon\Carbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IMechanicRepository::class, MechanicRepository::class);
        $this->app->bind(IUserRepository::class, UserRepository::class);
        $this->app->bind(IDealerRepository::class, DealerRepository::class);
        $this->app->bind(IServiceRepository::class, ServiceRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        config(['app.locale'=>'id']);
        Carbon::setLocale('id');
    }
}
