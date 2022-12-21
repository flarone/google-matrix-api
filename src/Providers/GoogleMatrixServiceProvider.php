<?php

namespace Flarone\GoogleMatrix\Providers;

use Illuminate\Contracts\Container\Container;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\ServiceProvider;
use Flarone\GoogleMatrix\GoogleMatrix;

class GoogleMatrixServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/google-matrix.php' => config_path('google-matrix.php'),
            ], 'google-matrix');
        }
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('google-matrix', function (Container $app) {
            return new GoogleMatrix($app['config']['google-matrix.api_key']);
        });

        $this->app->booting(function () {
            $loader = AliasLoader::getInstance();
            $loader->alias('GoogleMatrix', \Flarone\GoogleMatrix\Facades\GoogleMatrix::class);
        });
    }
}
