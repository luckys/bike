<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\Http\ViewComposers\RentStartWidgetComposer;
use App\Http\ViewComposers\RentEndWidgetComposer;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('admin.layout.widget.rent_starting_today', RentStartWidgetComposer::class);
        View::composer('admin.layout.widget.rent_ending_today', RentEndWidgetComposer::class);
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
}
