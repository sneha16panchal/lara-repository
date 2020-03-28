<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\RepositoryInterface; 
use App\Repository\Repository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(RepositoryInterface::class, Repository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
