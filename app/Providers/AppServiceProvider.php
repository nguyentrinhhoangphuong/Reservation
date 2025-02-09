<?php

namespace App\Providers;

use App\Contracts\FrontendRepositoryInterface;
use App\Repositories\FrontendRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(FrontendRepositoryInterface::class, FrontendRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
