<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\TestFormHelperClass;
use Illuminate\Support\Facades\App;

class TestFormServiceProvider extends ServiceProvider
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
        $this->app->bind('helpers', function () {
            return new TestFormHelperClass();
        });
    }
}
