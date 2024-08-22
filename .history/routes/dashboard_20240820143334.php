<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Dashboard\CategoriesController;
use Illuminate\Support\Facades\Route;





Route::group([
    'middleware' => 'auth'
], function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

    Route::resource('dashboard/categories', CategoriesController::class)
});
