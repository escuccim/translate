<?php

namespace Escuccim\Translate;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class TranslateServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // use this if your package has routes
        $this->setupRoutes($this->app->router);

        // publish config if necessary
        $this->publishes([
            __DIR__.'/config/translate.php' => config_path('translate.php'),
        ], 'config');

        // use the default configuration file as fallback
        $this->mergeConfigFrom(
            __DIR__.'/config/translate.php', 'translate'
        );
    }
    /**
     * Define the routes for the application.
     *
     * @param  \Illuminate\Routing\Router  $router
     * @return void
     */
    public function setupRoutes(Router $router)
    {
        $router->group(['namespace' => 'Escuccim\Sitemap\Http\Controllers'], function($router)
        {
            require __DIR__.'/Http/routes.php';
        });
    }
    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerClass();

        // specify the config file
        config([
            'config/translate.php',
        ]);
    }
    private function registerClass()
    {
        $this->app->bind('translate',function($app){
            return new TranslateClass($app);
        });
    }
}