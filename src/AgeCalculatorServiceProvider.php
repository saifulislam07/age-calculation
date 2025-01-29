<?php

namespace YourNamespace\AgeCalculator;

use Illuminate\Support\ServiceProvider;

class AgeCalculatorServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->singleton(AgeCalculator::class, function () {
            return new AgeCalculator();
        });
    }

    public function boot()
    {
        // Bootstrapping (if needed)
    }
}
