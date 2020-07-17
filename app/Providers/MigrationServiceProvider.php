<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class MigrationServiceProvider extends ServiceProvider
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
        $this->loadMigrationsFrom([
            base_path().DIRECTORY_SEPARATOR.'module'.DIRECTORY_SEPARATOR.'Account'.DIRECTORY_SEPARATOR.'migrations',
            base_path().DIRECTORY_SEPARATOR.'module'.DIRECTORY_SEPARATOR.'Hrm'.DIRECTORY_SEPARATOR.'migrations',
        ]);
    }
}
