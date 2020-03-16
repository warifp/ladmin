<?php

namespace Hexters\Ladmin;

use Illuminate\Support\ServiceProvider;

class LadminServiceProvider extends ServiceProvider
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
    public function boot() {
        
        /**
         * Load for routing
         */
        $this->loadRoutesFrom( __DIR__ . '/routes/web.php');

        /**
         * Load view template
         */
        $this->loadViewsFrom( __DIR__ . '/../Resources/Views', 'ladmin');
    }
}