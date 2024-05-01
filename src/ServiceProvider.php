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
        $this->loadComponents();

        $this->registerFormAdpater();

        $this->app->alias('form', FormAdapter::class);

        $this->loadViewsFrom(__DIR__.'/resources/views', 'laravel-collective-spatie-html-parser');
    }

    protected function loadComponents()
    {
        FormAdapter::component('rText',     'laravel-collective-spatie-html-parser::components.form.text',    ['name', 'label', 'attributes']);
        FormAdapter::component('rEmail',    'laravel-collective-spatie-html-parser::components.form.text',    ['name', 'label', 'attributes']);
        FormAdapter::component('rTextarea', 'laravel-collective-spatie-html-parser::components.form.textarea',['name', 'label', 'attributes']);
        FormAdapter::component('rEditor',   'laravel-collective-spatie-html-parser::components.form.editor',  ['name', 'label', 'attributes']);
        FormAdapter::component('rSearch',   'laravel-collective-spatie-html-parser::components.form.search',  ['name', 'route']);
        FormAdapter::component('rImage',    'laravel-collective-spatie-html-parser::components.form.image',   ['name', 'label', 'attributes']);
        FormAdapter::component('rRadio',    'laravel-collective-spatie-html-parser::components.form.radio',   ['name', 'label', 'items']);
        FormAdapter::component('rSelect',   'laravel-collective-spatie-html-parser::components.form.select',  ['name', 'label', 'items', 'attributes']);
        FormAdapter::component('rSubmit',   'laravel-collective-spatie-html-parser::components.form.submit',  ['label']);
        FormAdapter::component('rHidden',   'laravel-collective-spatie-html-parser::components.form.hidden',  ['name', 'value']);
        FormAdapter::component('rPassword', 'laravel-collective-spatie-html-parser::components.form.password',['name', 'label']);
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
