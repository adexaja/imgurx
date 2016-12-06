<?php

namespace Adexaja\Imgurx;

use Illuminate\Support\ServiceProvider;
use App;

class ImgurxServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/config' => base_path('config')
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Adexaja\Imgurx\Imgurx');

        App::bind('imgurx', function () {
            return new \Nahid\Imgurx\Imgurx;
        });

    }

    public function provides()
    {
        return ['Adexaja\Imgurx\ImgurxServiceProvider'];
    }
}
