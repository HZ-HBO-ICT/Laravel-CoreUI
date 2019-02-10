<?php

namespace HzHboIct\LaravelCoreUI\Console;

use Illuminate\Auth\Console\AuthMakeCommand;

class CoreUIMakeCommand extends AuthMakeCommand
{
    protected $signature = 'make:coreui {--views : Only scaffold the authentication views}{--force : Overwrite existing views by default}';

    protected $description = 'Scaffold basic CoreUI login and registration views and routes';

    protected function exportViews()
    {
        parent::exportViews();

        $views = [
            'auth/login.stub' => 'auth/login.blade.php',
            'auth/register.stub' => 'auth/register.blade.php',
            'auth/passwords/email.stub' => 'auth/passwords/email.blade.php',
            'auth/passwords/reset.stub' => 'auth/passwords/reset.blade.php',
            'home.stub' => 'home.blade.php'
        ];

        foreach ($views as $stub => $view) {
            copy(__DIR__.'/stubs/make/views/' . $stub, base_path('resources/views/vendor/' . $view));
        }
    }
}
