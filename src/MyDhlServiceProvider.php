<?php

namespace Cubes\MyDhl;

use Illuminate\Support\ServiceProvider;

class MyDhlServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/config/my_dhl.php' => config_path('my_dhl.php'),
        ]);
    }
    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->singleton(MyDhl::class, function () {
            return new MyDhl(
                config('my_dhl.base_path'),
                config('my_dhl.username'),
                config('my_dhl.password')
            );
        });
        $this->app->alias(MyDhl::class, 'my-dhl');
    }
}
