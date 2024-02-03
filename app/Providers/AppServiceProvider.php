<?php

namespace App\Providers;

use App\Models\Marca;
use App\Repository\MarcaRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(MarcaRepository::class, function ($app) {
            return new MarcaRepository(new Marca());
        });

        $this->app->bind(CocheRepository::class, function ($app) {
            return new CocheRepository(new Coche());
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
