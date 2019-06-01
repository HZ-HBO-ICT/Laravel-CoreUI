<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/coreui/css/coreui.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/coreui/fontawesome/css/fontawesome.css') }}">
    <!-- Custom CSS -->
    @stack('css')

    <title>@yield('title', config('coreui.title', __('coreui::coreui.default_title')))</title>
</head>
@if(request()->cookie('remember_sidebar'))
<body class="app header-fixed sidebar-fixed sidebar-lg-show">
@else
<body class="app header-fixed sidebar-fixed sidebar-lg-show sidebar-minimized brand-minimized">
@endif
<header class="app-header navbar">
    <div class="container-fluid">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="navbar-brand-full">{!! config('coreui.logo') !!}</span>
            <span class="navbar-brand-minimized">{!! config('coreui.logo_mini') !!}</span>
        </a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav ml-auto">
            <li class="nav-item dropdown">
                @if (\Illuminate\Support\Facades\Auth::user() !== null)
                    <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                       aria-expanded="false">
                        <i class="fa fa-user-cog"></i> {{ \Illuminate\Support\Facades\Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-header text-center">
                            <strong>{{ __('coreui::coreui.settings') }}</strong>
                        </div>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt"></i> {{ __('coreui::coreui.log_out') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="post" style="display: none;">
                            @csrf
                        </form>
                    </div>
                @endif
            </li>
        </ul>
    </div>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                @each('coreui::menu-item', $coreUI->menu(), 'item')
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">
        <div aria-label="breadcrumb">
            @yield('breadcrumb')
        </div>
        <div class="container-fluid">
            @yield('body')
        </div>
    </main>
</div>
<footer class="app-footer">
    <div>
        <span>&copy; {{ \Carbon\Carbon::now()->year }} HZ University of Applied Sciences</span>
    </div>
    <div class="ml-auto">
        <span>Powered by </span><a target="_blank" href="https://coreui.io">CoreUI</a>,
        <span>inspired by </span><a target="_blank" href="https://github.com/jeroennoten/Laravel-AdminLTE">Laravel-AdminLTE</a>
    </div>
</footer>

<!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
<script src="{{ asset('vendor/coreui/js/remember-sidebar.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/jquery.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/popper.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui-utilities.js') }}"></script>

<!-- Custom JS -->
@stack('js')
</body>
</html>
