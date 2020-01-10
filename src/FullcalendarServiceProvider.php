<?php

namespace ConfrariaWeb\Fullcalendar;

use Illuminate\Support\ServiceProvider;

class FullcalendarServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('fullcalendar', function ($app) {
            return $app->make('ConfrariaWeb\Fullcalendar\Calendar');
        });
    }

    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/Views/', 'fullcalendar');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['fullcalendar'];
    }

}

