<?php

namespace Src\CandidateManagement\Providers;

class CandidateManagementServiceProvider extends \Illuminate\Support\ServiceProvider
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
