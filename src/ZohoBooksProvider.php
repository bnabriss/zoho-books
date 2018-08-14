<?php

namespace Bnabriss\ZohoBooks;

use Illuminate\Support\ServiceProvider;


class ZohoBooksProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        
        //register config to be published
        $this->publishes([
            __DIR__.'/../config/zoho-books.php' => config_path('zoho-books.php'),
        ]);


    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/zoho-books.php', 'zoho-books');



    }

}