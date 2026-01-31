<?php

namespace App\Providers;

use App\Interfaces\IUserRepository;
use App\Interfaces\IVendedorInterface;
use App\Interfaces\IProdutoInterface;
use App\Interfaces\ICategoriaInterface;
use App\Interfaces\ISubCategoriaInterface;
use App\Interfaces\IAvaliacaoInterface;
use App\Interfaces\IGatewayPagamentoInterface as InterfacesIGatewayPagamentoInterface;
use App\Interfaces\IPedidoInterface;
use App\Interfaces\IVendaInterface;
use App\Repositorys\UserRepositoryEloquent;
use App\Repositorys\VendedorRepositoryEnloquent;
use App\Repositorys\ProdutoRepositoryEloquent;
use App\Repositorys\CategoriaRepositoryEloquent;
use App\Repositorys\SubCategoriaRepositoryEloquent;
use App\Repositorys\AvaliacaoRepositoryEloquent;
use App\Repositorys\PedidoRepositoryEloquent;
use App\Repositorys\StripePaymentsRepository;
use App\Repositorys\VendaRepositoryEloquent;
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
        $this->app->bind(ICategoriaInterface::class, CategoriaRepositoryEloquent::class);
        $this->app->bind(ISubCategoriaInterface::class, SubCategoriaRepositoryEloquent::class);
        $this->app->bind(IAvaliacaoInterface::class, AvaliacaoRepositoryEloquent::class);
        $this->app->bind(IPedidoInterface::class, PedidoRepositoryEloquent::class);
        $this->app->bind(IVendaInterface::class, VendaRepositoryEloquent::class);
        $this->app->bind(InterfacesIGatewayPagamentoInterface::class, StripePaymentsRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
