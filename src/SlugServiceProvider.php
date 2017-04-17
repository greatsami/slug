<?php

namespace Hosseinhkj\Slug;

use Illuminate\Support\ServiceProvider;

class SlugServiceProvider extends ServiceProvider
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
        $this->app->singleton(Slug::class, function ($app) {
        // $this->app['slug'] = $this->app->share(function ($app) {
            return new Slug;
        });
    }
}
