<?php

namespace App\Providers;

use App\Dailos\Repositories\VehicleRepository;
use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {

    }

    public function boot(Request $request)
    {

        $model = 'App\Dailos\Entities\\' . (( $request->has('type') && $request->input('type') == 'b') ? 'Bike' : 'Motorbike');
        $this->app->bind('App\Dailos\Repositories\VehicleRepository', function() use($model){
            return new VehicleRepository(new $model);
        });

    }

}