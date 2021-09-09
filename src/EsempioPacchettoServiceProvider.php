<?php

namespace Aulab\EsempioPacchetto;

use Illuminate\Support\ServiceProvider;

class EsempioPacchettoServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Aulab\EsempioPacchetto\EsempioController');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
