<?php

namespace JorgeBeserra\Mercadopago\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class MercadopagoServiceProvider
 * @package JorgeBeserra\Mercadopago\Providers
 */
class MercadopagoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__ . '/../Http/routes.php';

        $this->loadViewsFrom(__DIR__ . '/../Resources/views', 'mercadopago');

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/system.php', 'core'
        );

        $this->mergeConfigFrom(
            dirname(__DIR__) . '/Config/paymentmethods.php', 'paymentmethods'
        );
    }
}
