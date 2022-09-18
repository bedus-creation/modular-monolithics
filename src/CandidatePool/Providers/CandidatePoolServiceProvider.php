<?php

namespace Src\CandidatePool\Providers;

use Illuminate\Support\ServiceProvider;
use Src\CandidateManagement\Providers\RouteServiceProvider;

class CandidatePoolServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__."/../routes.php");
        $this->loadMigrationsFrom(__DIR__."/../Infrastructure/Database/Migrations");
        $this->loadTranslationsFrom(__DIR__."/../Resources/lang", 'candidate-management');
    }

    public function register()
    {
        $this->app->register(RouteServiceProvider::class);
    }
}
