<?php

namespace Alban\LaravelCollectiveSpatieHtmlParser;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFormAdpater();

        $this->app->alias('form', FormAdapter::class);
    }

    /**
     * Register the HTML adapter instance.
     *
     * @return void
     */
    protected function registerFormAdpater()
    {
        $this->app->singleton('form', function () {
            return new FormAdapter();
        });
    }
}
