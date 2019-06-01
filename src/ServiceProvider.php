<?php

namespace HzHboIct\LaravelCoreUI;

use HzHboIct\LaravelCoreUI\Console\CoreUIMakeCommand;
use HzHboIct\LaravelCoreUI\Events\BuildingMenu;
use HzHboIct\LaravelCoreUI\Http\ViewComposers\CoreUIComposer;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;
use Illuminate\Contracts\View\Factory;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(Factory $view, Dispatcher $events, Repository $config)
    {
        $this->loadViewsFrom(
            $this->getPathFromPackageRoot('resources/views'),
            'coreui'
        );

        $this->loadTranslations();
        $this->publishConfig();
        $this->publishAssets();
        $this->publishCommands();
        $this->publishViews();
        $this->publishMiddleware();
        $this->registerViewComposers($view);
        static::registerMenu($events, $config);
    }

    public function register()
    {
        $this->app->singleton(CoreUI::class, function (Container $app) {
            return new CoreUI(
                $app['config']['coreui.filters'],
                $app['events'],
                $app
            );
        });
    }

    /**
     * Builds the menu whenever the BuildingMenu event is fired
     * @param Dispatcher $events
     * @param Repository $config
     */
    public static function registerMenu(Dispatcher $events, Repository $config)
    {
        $events->listen(BuildingMenu::class, function (BuildingMenu $event) use ($config) {
            $menu = $config->get('coreui.menu');
            call_user_func_array([$event->menu, 'add'], $menu);
        });
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

        $this->mergeConfigFrom($this->getPathFromPackageRoot('config/coreui.php'), 'coreui');
    }

    private function publishAssets(): void
    {
        $this->publishes([
            $this->getPathFromPackageRoot('resources/assets/') => public_path('vendor/coreui')
        ], 'assets');
    }

    private function publishCommands(): void
    {
        $this->commands(CoreUIMakeCommand::class);
    }

    private function publishViews(): void
    {
        $this->publishes([
            $this->getPathFromPackageRoot('resources/views/') => resource_path('views/vendor/coreui'),
        ], 'views');
    }

    private function publishMiddleware(): void
    {
        $this->publishes([
            $this->getPathFromPackageRoot('src/Http/Middleware') => app_path('Http/Middleware'),
        ], 'middleware');
    }

    private function registerViewComposers(Factory $view): void
    {
        $view->composer('coreui::master', CoreUIComposer::class);
    }

    private function loadTranslations()
    {
        $translationsPath = $this->getPathFromPackageRoot('resources/lang');

        $this->loadTranslationsFrom($translationsPath, 'coreui');

        $this->publishes([
            $translationsPath => base_path('resources/lang/vendor/coreui'),
        ], 'translations');
    }


}
