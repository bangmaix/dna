<?php

namespace Bangmaix\DNA\Providers;

use Illuminate\Support\ServiceProvider;

class DNAServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //Memanggil Route Library
    $this->loadRoutesFrom(__DIR__.'/routes.php');
	//Mempublish Konfigurasi Library
    $this->publishes([__DIR__.'/../resources/config/dna.php' => config_path('dna.php'),]);
	//Mempublish Views Library
    $this->publishes([__DIR__.'/../resources/views' => resource_path('views/vendor/dna'),]);
	//Mempublish Translations/Penerjemah Library
    $this->publishes([__DIR__.'/../resources/lang' => resource_path('lang/vendor/demo'),]);
	//Memanggil Translations/Penerjemah Library
    $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'dna');
	//Mendefinisikan Letak Folder View Library
    $this->loadViewsFrom(__DIR__.'/../resources/views', 'dna');
    }
}
