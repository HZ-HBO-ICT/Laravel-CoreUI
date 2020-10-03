<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/coreui/css/coreui.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/coreui/fontawesome/css/fontawesome.css') }}">
    <!-- Custom CSS -->
    @stack('css')

    <title>@yield('title', config('coreui.title', __('coreui::coreui.default_title')))</title>
</head>
<body class="c-app">

{{--<script type="application/javascript" src="{{ asset('vendor/coreui/js/toggle_sidebar.js') }}"></script>--}}
<div class="c-sidebar c-sidebar-fixed c-sidebar-lg-show">
    <a class="c-sidebar-brand d-md-down-none" href="{{ url('/') }}">
        <div class="c-sidebar-brand-full">{!! config('coreui.logo') !!}</div>
        <div class="c-sidebar-brand-minimized">{!! config('coreui.logo_mini') !!}</div>
    </a>

    <ul class="c-sidebar-nav">
        @each('coreui::menu-item', $coreUI->menu(), 'item')
    </ul>

    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent" data-class="c-sidebar-unfoldable"></button>

{{--    <script type="application/javascript" src="{{ asset('vendor/coreui/js/add_listener_to_sidebar.js') }}"></script>--}}
</div>

<div class="c-wrapper">
    <header class="c-header c-header-fixed navbar">
        <button class="c-header-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="c-header-toggler-icon"></span>
        </button>
        <button class="c-header-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="c-header-toggler-icon"></span>
        </button>
        <ul class="c-header-nav ml-auto">
            @yield('account', View::make('coreui::account'))
        </ul>
    </header>

    <div class="c-body">
        <main class="c-main">
            <div aria-label="breadcrumb">
                @yield('breadcrumb')
            </div>
            <div class="container-fluid">
                @yield('body')
            </div>
        </main>
    </div>

    <footer class="c-footer">
        @yield('footer', View::make('coreui::footer'))
    </footer>
</div>

<!-- Perfect Scrollbar first, then CoreUI  -->
<script type="application/javascript" src="{{ asset('vendor/coreui/js/perfect-scrollbar.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('vendor/coreui/js/coreui.bundle.min.js') }}"></script>
<script type="application/javascript" src="{{ asset('vendor/coreui/js/coreui-utilities.min.js') }}"></script>

<!-- Custom JS -->
@stack('js')
</body>
</html>
