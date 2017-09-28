<?php

namespace Barsegyan\Createcmm;

use Illuminate\Support\ServiceProvider;

class BarsegyanCreateCMMServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                CreateCMMController::class
            ]);
        }
    }
    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Barsegyan\Createcmm\CreateCMMController');
    }
}
