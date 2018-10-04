<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="{{ asset('vendor/coreui/css/coreui.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/coreui/fontawesome/css/fontawesome.css') }}">

    <title>Login</title>
</head>
<body class="app flex-row align-items-center">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <h1>Login</h1>
                        <p class="text-muted">Sign In to your account</p>
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fa fa-envelope"></i>
                                </span>
                            </div>
                            <input class="form-control" type="text" placeholder="Email">
                        </div>
                        <div class="input-group mb-4">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                <i class="fa fa-lock"></i>
                                </span>
                            </div>
                            <input class="form-control" type="password" placeholder="Password">
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-primary px-4" type="button">Login</button>
                            </div>
                            <div class="col-6 text-right">
                                <button class="btn btn-link px-0" type="button">Forgot password?</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery first, then Popper.js, Bootstrap, then CoreUI  -->
<script src="{{ asset('vendor/coreui/js/jquery.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/popper.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/bootstrap.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui.js') }}"></script>
<script src="{{ asset('vendor/coreui/js/coreui-utilities.js') }}"></script>
</body>
</html>
