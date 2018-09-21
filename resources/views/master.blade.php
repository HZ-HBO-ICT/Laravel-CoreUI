<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CoreUI CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/coreui/css/coreui.css') }}">
    <!-- Custom CSS -->
    @stack('css')

    <title>@yield('title', config('coreui.title', 'CoreUI Laravel Theme by HZ-HBO-ICT'))</title>
</head>
<body class="app">
    @yield('content')

    <!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
    <script src="{{ asset('vendor/coreui/js/jquery.js') }}"></script>
    <script src="{{ asset('vendor/coreui/js/popper.js') }}"></script>
    <script src="{{ asset('vendor/coreui/js/bootstrap.js') }}"></script>
    <script src="{{ asset('vendor/coreui/js/coreui.js') }}"></script>

    <!-- Custom JS -->
    @stack('js')
</body>
</html>