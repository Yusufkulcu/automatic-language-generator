<?php

namespace YusufKulcu\AutoLanguageGenerator;

use Illuminate\Contracts\Container\BindingResolutionException;
use Illuminate\Support\ServiceProvider;

class AutoLanguageGeneratorServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     * @throws BindingResolutionException
     */
    public function register(): void
    {
        $this->app->make('YusufKulcu\AutoLanguageGenerator\controllers\AutoLanguageGeneratorMainController');
        $this->loadViewsFrom(__DIR__ . "/views", "AutoLanguageGenerator");
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        include __DIR__ . "/routes.php";
    }
}
