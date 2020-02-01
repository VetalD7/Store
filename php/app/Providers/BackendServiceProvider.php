<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class BackendServiceProvider
 * @package App\Providers
 */
class BackendServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        /** User services */
        $this->app->bind('App\Contracts\UserLoginContract', 'App\Services\Backend\User\UserLoginService');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
