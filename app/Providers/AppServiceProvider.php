<?php

namespace App\Providers;

use App\Interfaces\IUserRepository;
use App\Interfaces\IVendedorInterface;
use App\Interfaces\IProdutoInterface;
use App\Repositorys\UserRepositoryEloquent;
use App\Repositorys\VendedorRepositoryEnloquent;
use App\Repositorys\ProdutoRepositoryEloquent;
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
        $this->app->bind(IProdutoInterface::class, ProdutoRepositoryEloquent::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
