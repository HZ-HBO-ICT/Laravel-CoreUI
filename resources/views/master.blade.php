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
                <li class="nav-item">
                    <a class="nav-link" href="index.html">
                        <i class="nav-icon fa fa-chart-bar"></i> Dashboard
                    </a>
                </li>
                <li class="nav-title">First section</li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <i class="nav-icon fa fa-cog"></i> Settings</a>
                </li>
                <li class="nav-title">Second section</li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#">
                        <i class="nav-icon fa fa-arrow-down"></i> Dropdown</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="https://fontawesome.com/v5.3.1/icons?d=gallery">
                                <i class="nav-icon icon-star"></i> FA Icons
                                <span class="badge badge-success">NEW</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <main class="main">
        <!-- Breadcrumb-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>

        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h1>Hello world!</h1>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="card text-center">
                        <div class="card-header">
                            Featured
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">It's a broader card with text below as a natural lead-in to extra content. This content is a little longer.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <img class="card-img-top" src="https://via.placeholder.com/300x180" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">You can also use headers, like this image!</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                        <div class="card-footer">
                            Cards can even have footers
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-white bg-warning mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body">
                            <h5 class="card-title">Secondary card title</h5>
                            <p class="card-text">You can use a couple of color classes to make your cards more visually appealing too!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card border-danger mb-3">
                        <div class="card-header">Header</div>
                        <div class="card-body text-danger">
                            <h5 class="card-title">Danger card title</h5>
                            <p class="card-text">Or make use of some slightly less intense coloring, which can convey your intentions well enough too.</p>
                        </div>
                    </div>
                </div>
            </div>
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
