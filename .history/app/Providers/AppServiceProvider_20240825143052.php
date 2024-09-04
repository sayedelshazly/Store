<?php

namespace App\Providers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //validation rule use as [filter] (one value)
        /* Validator::extend('filter', function($attribute, $value){
            if(strtolower($value) == 'laravel'){
                return false;
            }
            return true;
        }, 'no no'); */

        //validation rule use as [filter] (multiple value)
        Validator::extend('filter', function($attribute, $value, $arr){
            if( in_array($value, $arr) ){
                return false;
            }
            return true;
        }, 'no no');

        Pa
    }
}
