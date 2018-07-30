<?php

namespace Blog;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

/**
 * Class ServiceProvider
 * @package LaraCrud
 */

class ServiceProvider extends BaseServiceProvider
{


    /**
     * List of command which will be registered.
     * @var array
     */
    protected $commands = [];

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
        $this->loadRoutesFrom(__DIR__ . '/../routes/api.php');
    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__ . '/../config/blog.php' => config_path('blog.php'),
        ],'blog-config');

        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/blog'),
        ],'blog-views');

        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'blog');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/blog.php', 'blog'
        );
    }
}