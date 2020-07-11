<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
            // $this->app->singletoon('GuzzleHttp\Client',function(){
            //     return  new Client([
                   
            //         'base_uri' => 'http://www.api.avantisoluciones.com/public',
            //     ]);
            // });

    }
}
