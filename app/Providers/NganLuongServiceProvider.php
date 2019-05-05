<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;

/**
 * ServiceProvider
 *
 * The service provider for the modules. After being registered
 * it will make sure that each of the modules are properly loaded
 * i.e. with their routes, views etc.
 *
 * @author Hoangdv <hoangdv1112@gmail.com>
 * @package App\Providers
 */
class NganLuongServiceProvider extends ServiceProvider
{
    public function boot()
    {
        
    }

    public function register()
    {
        $this->app->singleton(\App\Services\Nganluong::class, function ($app) {
            return new \App\Services\Nganluong();
        });
    }
}