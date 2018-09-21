<?php

namespace HzHboIct\LaravelCoreUI;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function register()
    {
        // TODO probably some sort of menu builder
    }

    public function boot()
    {
        $this->loadViewsFrom($this->getPathFromPackageRoot('resources/views'), 'coreui');

        $this->publishConfig();
        $this->publishAssets();
        $this->publishViews();
    }

    private function getPathFromPackageRoot(string $path): string
    {
        return __DIR__ . '/../' . $path;
    }

    private function publishConfig(): void
    {
        $this->publishes([
            $this->getPathFromPackageRoot('config/coreui.php') => config_path('coreui.php')
        ], 'config');
    }

    private function publishAssets(): void
    {
        $this->publishes([
            $this->getPathFromPackageRoot('resources/assets/') => public_path('vendor/coreui')
        ], 'assets');
    }

    private function publishViews(): void
    {
        $this->publishes([
            $this->getPathFromPackageRoot('resources/views/') => resource_path('views/vendor/coreui'),
        ]);
    }
}
