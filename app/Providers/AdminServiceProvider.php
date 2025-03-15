<?php

namespace App\Providers;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function registerRoutes(Router $router)
    {
        $router->group(['prefix' => 'admin'], function () {
            require base_path('routes/admin.php');
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
