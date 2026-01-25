<?php

namespace App\Providers;

use App\Interfaces\IUserRepository;
use App\Interfaces\IVendedorInterface;
use App\Repositorys\UserRepositoryEloquent;
use App\Repositorys\VendedorRepositoryEnloquent;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(IUserRepository::class, UserRepositoryEloquent::class);
        $this->app->bind(IVendedorInterface::class, VendedorRepositoryEnloquent::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
