<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        Schema::defaultStringLength(191);   //
    }
    
    
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
    //Syntax error or access violation: 1071 Specified key was too long; max key length is 767 bytes
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    
}
