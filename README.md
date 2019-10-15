# Laravel CoreUI integration

[![Latest Stable Version](https://poser.pugx.org/hz-hbo-ict/laravel-core-ui/v/stable)](https://packagist.org/packages/hz-hbo-ict/laravel-core-ui)
[![Total Downloads](https://poser.pugx.org/hz-hbo-ict/laravel-core-ui/downloads)](https://packagist.org/packages/hz-hbo-ict/laravel-core-ui)
[![License](https://poser.pugx.org/hz-hbo-ict/laravel-core-ui/license)](https://packagist.org/packages/hz-hbo-ict/laravel-core-ui)

This is an opinionated package designed to help our freshman year's students with rapid prototyping of web applications.

The package is based upon [CoreUI](https://coreui.io/), with every plugin we deemed unnecessary removed.
It builds upon the latest stable releases of [Laravel](https://laravel.com). As of now, that is version `6.x`.

It also incorporates a replacement command for Laravel's [`ui:auth`](https://laravel.com/docs/6.0/authentication#introduction) command that uses CoreUI styled views for a more consistent user experience.

The result is an easy to use package that can setup a secure and complete dashboard front-end in a matter of seconds. Adding new views and features is a breeze and doesn't disrupt your normal workflow.

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
`footer`|for all of the footer content
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

@section('footer')
    <p>My awesome footer!</p>
@endsection

@push('js')
    <script src="/url/to/script.js"></script>
@endpush
```

## CoreUI authentication views

There's a command `ui:coreui` that behaves just like the built-in `ui:auth` command, but it replaces the default views with [CoreUI styled ones](https://coreui.io/demo/login.html)

```bash
$ php artisan ui:coreui
```

## Configuration

To edit site title, menu and other things, publish the configuration file:

```bash
$ php artisan vendor:publish --provider="HzHboIct\LaravelCoreUI\ServiceProvider" --tag=config
```

You can now edit it at `config/coreui.php`.

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

To update the package, run the following command. Note that this **will** overwrite any changes you've made in the published asset files. Published views, config and translations need to be updated manually.

```bash
$ composer update hz-hbo-ict/laravel-core-ui
$ php artisan vendor:publish --provider="HzHboIct\LaravelCoreUI\ServiceProvider" --tag=assets --force
```

## License

This packaged is licensed under the MIT License. 

## Acknowledgements

Heavily inspired by [Jeroen Noten](https://github.com/jeroennoten)'s [Laravel-AdminLTE](https://github.com/jeroennoten/Laravel-AdminLTE) package.
