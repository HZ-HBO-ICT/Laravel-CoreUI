# Laravel CoreUI integration

[![Latest Stable Version](https://poser.pugx.org/hz-hbo-ict/laravel-core-ui/v/stable)](https://packagist.org/packages/hz-hbo-ict/laravel-core-ui)
[![Total Downloads](https://poser.pugx.org/hz-hbo-ict/laravel-core-ui/downloads)](https://packagist.org/packages/hz-hbo-ict/laravel-core-ui)
[![License](https://poser.pugx.org/hz-hbo-ict/laravel-core-ui/license)](https://packagist.org/packages/hz-hbo-ict/laravel-core-ui)

This is a very opinionated package designed to help our freshman year's students with rapid prototyping of web applications.

The package is based upon [CoreUI](https://coreui.io/), with every plugin we deemed unnecessary removed.
It builds upon the latest stable releases of [Laravel 5](https://laravel.com). As of now, that is version `5.8`.

It also incorporates a replacement command for Laravel's [`make:auth`](https://laravel.com/docs/5.8/authentication#introduction) command that uses CoreUI styled views for a more consistent user experience.

## Installation

```bash
$ composer require hz-hbo-ict/laravel-core-ui
$ php artisan vendor:publish --provider="HzHboIct\LaravelCoreUI\ServiceProvider" --tag=assets
```

## Usage

For all the available CoreUI components, see [the official demo](https://coreui.io/demo/#main.html) and [the official documentation](https://coreui.io/docs/getting-started/introduction/).

To use the template, create a blade file and extend the layout with `@extends('coreui::master')`.

This template yields multiple sections, all of them optional:

`section`|explanation
---|---
`title`|for `<title>` tag
`breadcrumb`|for breadcrumb bar 
`body`|for all of the content
`css`|for additional CSS files
`js`|for additional JavaScript files

A page can look like this:

```php
@extends('coreui::master')

@push('css')
    <link rel="stylesheet" type="text/css" href="/url/to/stylesheet.css">
@endpush

@section('title', 'Dashboard')

@section('breadcrumb')
    <ol class="breadcrumb">
        <li class="breadcrumb-item">a breadcrumb item</li>
    </ol>
@stop

@section('body')
    <h1>Dashboard</h1>
    <p>Welcome to this awesome web app!</p>
@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush
```

## CoreUI authentication views

There's a command `make:coreui` that behaves just like the built-in `make:auth` command, but it replaces the default views with [CoreUI styled ones](https://coreui.io/demo/login.html)

```bash
$ php artisan make:coreui
```

## Configuration

To edit site title, menu and other things, publish the configuration file:

```bash
$ php artisan vendor:publish --provider="HzHboIct\LaravelCoreUI\ServiceProvider" --tag=config
```

You can now edit it at `config/coreui.php`.

## Middleware

In order to be able to remember whether the user has the sidebar collapsed or expanded, a cookie is saved in the browser. This cookie is set from JavaScript, so should not be encrypted. This cookie will have to be added to the whitelist for encryption.

This can be done manually by adding `'remember_sidebar'` to the EncryptCookies middleware under `protected $except`, located in `app/Http/Middleware`.
It should at least look like this:
```
protected $except = [
    'remember_sidebar'
];
```

There is also an artisan command for it. **This does overwrite any changes you have made to the file**. 
```
php artisan vendor:publish --provider="HzHboIct\LaravelCoreUI\ServiceProvider" --tag=middleware --force
```

## Customized views

If you need complete control of the provided views, run:

```bash
$ php artisan vendor:publish --provider="HzHboIct\LaravelCoreUI\ServiceProvider" --tag=views
```

You can now edit them under `resources/views/vendor/coreui`.

## Translations

At the moment, English and Dutch translations are available out of the box.
Just specifiy the language in `config/app.php`.
If you need to modify the texts or add other languages, you can publish the language files:

```
php artisan vendor:publish --provider="HzHboIct\LaravelCoreUI\ServiceProvider" --tag=translations
```

Now, you can edit translations or add languages in `resources/lang/vendor/coreui`.

## Updating the package

To update the package, run the following command. Note that this **will** overwrite any changes you've made in the published files.

```bash
$ php artisan vendor:publish --provider="HzHboIct\LaravelCoreUI\ServiceProvider" --tag=assets --force
```

## License

This packaged is licensed under the MIT License. Please note that CoreUI has different licensing, explained [here](https://coreui.io/pro/license/).

If your application is free of charge and is used by one client only, you're free to do that. If any other circumstances apply, please consult the mentioned CoreUI licensing page.

## Acknowledgements

Heavily inspired by [Jeroen Noten](https://github.com/jeroennoten)'s [Laravel-AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE) package.
