<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class BarberServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function registerRoutes(Router $router)
    {
        $router->group(['prefix' => 'barber'], function () {
            require base_path('routes/barber.php');
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot()
    {
        $this->registerRoutes($this->app->make(Router::class));
    }
}
