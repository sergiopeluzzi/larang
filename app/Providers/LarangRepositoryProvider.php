<?php

namespace Larang\Providers;

use Illuminate\Support\ServiceProvider;

class LarangRepositoryProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Larang\Repositories\ClientRepository::class, \Larang\Repositories\ClientRepositoryEloquent::class);
    }
}
