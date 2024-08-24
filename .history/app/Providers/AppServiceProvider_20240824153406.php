<?php

namespace App\Providers;

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
        validator('filter', function($attribute, $value){
            if( in_array($value, $this->forbidden) ){
                $fail('no no no!!');
            }
            return true;
        }, 'no no no!');
    }
}
