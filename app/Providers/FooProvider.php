<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FooProvider extends ServiceProvider
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
        //
       $this->publishes([__DIR__ . '/../Http/Controllers/FooController.php'=>app_path('Http/Controllers/FooController.php')]);
//       $this->loadRoutesFrom(__DIR__ . '/../../routes/web.php');

    }

}
