<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\ViewComposer;
use App\Http\View\Composers\ViewComposers;

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
        // Share with every single view
        // View::share('data', ViewComposer::orderBy('name')->get() );

        // Share with specific view
        // View::composer(['view_composer.index', 'view_composer.create'], function($view){
        //     $view->with('data', ViewComposer::orderBy('name')->get() );
        // });

        // Dedicated Class
        View::composer(['view_composer.index', 'view_composer.create'], ViewComposers::class);

    }
}
