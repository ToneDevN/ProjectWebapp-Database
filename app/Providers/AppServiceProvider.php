<?php

namespace App\Providers;

use \Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::if('user', function(){
            return auth()->user()->type == 'user';
        });
        Blade::if('poser', function(){
            return auth()->user()->type == 'poser';
        });
    }
}
