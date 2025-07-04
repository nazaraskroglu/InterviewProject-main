<?php

namespace App\Providers;

use App\Repositories\CompanyRepositories\ICompanyRepository;
use App\Repositories\CompanyRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(ICompanyRepository::class, CompanyRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
