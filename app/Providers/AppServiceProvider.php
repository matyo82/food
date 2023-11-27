<?php

namespace App\Providers;

use App\Models\General;
use Illuminate\Support\ServiceProvider;
//use Illuminate\View\View;
use Illuminate\Support\Facades\View;

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
        View::composer('*', function ($view) {
            $general = General::latest('created_at')->first();
            $view->with(['general' => $general]);
        });
    }
}
