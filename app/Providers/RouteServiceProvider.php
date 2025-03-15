<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function boot()
    {
        parent::boot();
    }

    public function map()
    {
        $this->mapAdminRoutes();
        $this->mapUserRoutes();
        $this->mapBarberRoutes();
    }

    protected function mapAdminRoutes()
    {
        Route::middleware('web')
            ->prefix('admin')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
    }

    protected function mapUserRoutes()
    {
        Route::middleware('web')
            ->prefix('user')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapBarberRoutes()
    {
        Route::middleware('web')
            ->prefix('barber')
            ->namespace($this->namespace)
            ->group(base_path('routes/barber.php'));
    }
}
