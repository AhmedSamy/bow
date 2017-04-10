<?php

namespace Zelf\Bow\Providers;

use Illuminate\Support\ServiceProvider;

class BowServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../../config/bow.php' => config_path('bow.php'),
            __DIR__.'/../../resources/views' => resource_path('views/vendor/bow'),
            __DIR__.'/../../database/seeds' => base_path('database/seeds'),
        ], 'bow');

        $this->loadRoutesFrom(__DIR__.'/../../routes/bow.php');

        $this->loadViewsFrom(__DIR__.'/../../resources/views', 'bow');

        $this->loadMigrationsFrom(__DIR__.'/../../database/migrations');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../../config/bow.php',
            'bow'
        );
    }
}
