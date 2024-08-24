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
        Validator::extend('filter', function($attribute, $value){
            if(strtolower($value) == 'laravel'){
                return false;
            }
            return true;
        }, 'no no');

        //same with multiple values as array
        Validator::extend('filter', function($attribute, $value){
            if( in_array($value, $this->forbidden) ){
                $fail('no no no!!');
            }
            return true;
        }, 'no no');
    }
}
