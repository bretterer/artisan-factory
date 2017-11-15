<?php


namespace Bretterer\ArtisanFactory;

use Illuminate\Support\ServiceProvider;

class FactoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    public function register()
    {
        $this->commands([
            FactoryCreateCommand::class
        ]);
    }

    public function provides()
    {
        return [
            FactoryCreateCommand::class
        ];
    }
}