<?php

namespace App\Providers;

use App\Interfaces\ProduitsInterface;
use App\Repos\ProduitRepository;
use Illuminate\Support\ServiceProvider;

class ProduitProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(
        ProduitsInterface::class,
        ProduitRepository::class
        );
    }
}
