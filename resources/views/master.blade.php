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

    <title>@yield('title', config('coreui.title', 'CoreUI Laravel Theme by HZ-HBO-ICT'))</title>
</head>
<body class="app header-fixed sidebar-fixed sidebar-lg-show">
<header class="app-header navbar">
    <div class="container-fluid">
        <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto" type="button" data-toggle="sidebar-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">{!! config('coreui.logo') !!}</a>
        <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="nav ml-auto">
            <li class="nav-item dropdown">
                <a class="nav-link" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-user-cog"></i> Account
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <div class="dropdown-header text-center">
                        <strong>Settings</strong>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-user"></i> Profile
                    </a>
                    <a class="dropdown-item" href="#">
                        <i class="fa fa-lock"></i> Logout
                    </a>
                </div>
            </li>
        </ul>
    </div>
</header>
<div class="app-body">
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                @foreach(config('coreui.menu') as $item)
                    @if(is_string($item))
                        <li class="nav-title">{{ $item }}</li>
                    @else
                        @if(isset($item['submenu']))
                            <li class="nav-item nav-dropdown">
                                <a class="nav-link nav-dropdown-toggle" href="#">
                                    @if(isset($item['icon'])) <i class="nav-icon fa fa-{{ $item['icon'] }}"></i> @endif
                                    {{ $item['text'] }}
                                </a>
                                <ul class="nav-dropdown-items">
                                    {{-- TODO Write this into a function with the menu builder --}}
                                    {{--<li class="nav-item nav-dropdown">--}}
                                        {{--<a class="nav-link nav-dropdown-toggle" href="#">--}}
                                            {{--<i class="nav-icon fa fa-arrow-down"></i> Dropdown</a>--}}
                                        {{--<ul class="nav-dropdown-items">--}}
                                            {{--<li class="nav-item">--}}
                                                {{--<a class="nav-link" href="https://fontawesome.com/v5.3.1/icons?d=gallery">--}}
                                                    {{--<i class="nav-icon icon-star"></i> FA Icons--}}
                                                    {{--<span class="badge badge-success">NEW</span>--}}
                                                {{--</a>--}}
                                            {{--</li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a
                                    @if(isset($item['url'])) href="{{ url($item['url']) }}" @endif
                                    @if(isset($item['route'])) href="{{ route($item['route']) }}" @endif
                                    @if(isset($item['target'])) target="{{ $item['target'] }}" @endif
                                    class="nav-link"
                                >
                                    @if(isset($item['icon'])) <i class="nav-icon fa fa-{{ $item['icon'] }}"></i> @endif
                                    {{ $item['text'] }}
                                </a>

                            </li>
                        @endif
                    @endif
                @endforeach
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">
        <div class="container-fluid">
            @yield('body')
        </div>
    </main>
</div>
<footer class="app-footer">
    <div>
        <span>&copy; 2018 HZ University of Applied Sciences</span>
    </div>
    <div class="ml-auto">
        <span>Powered by</span>
        <a href="https://coreui.io">CoreUI</a>
    </div>
</footer>

    <!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
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
