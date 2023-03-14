<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
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
        view()->composer('_partials.sidebar',function($view) {
        $view->with('servicesList', Service::all());
        });
    }
}
