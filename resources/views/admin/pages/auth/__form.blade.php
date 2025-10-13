@props([
    'auth'
    ])
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @if ($auth == 'login')
        <title>Dashboard | Log in</title>
    @elseif($auth == 'register')
        <title>Dashboard | Register</title>
        @else
        <title>Dashboard | Unknown</title>
    @endif

    @include('admin.layout.partials.css')
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="{{ route('admin.dashboard') }}" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                @if ($auth == 'login')
                    <p class="login-box-msg">Sign in to start your session</p>
                @elseif ($auth == 'register')
                    <p class="login-box-msg">Register a new membership</p>
                @endif
                    <form action="{{ $auth == 'login' ? route('admin.login') : ($auth == 'register' ? route('admin.register') : '#') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" name="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            @if ($auth == 'login')
                                <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                            @elseif ($auth == 'register')
                                <button type="submit" class="btn btn-primary btn-block">Register</button>
                            @endif
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <div class="social-auth-links text-center mt-2 mb-3">
                    <a href="#" class="btn btn-block btn-primary">
                        <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                    </a>
                    <a href="#" class="btn btn-block btn-danger">
                        <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                    </a>
                </div>

                @if ($auth=='login')
                <p class="mb-1">
                    <a href="forgot-password.html">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="{{ route('admin.register') }}" class="text-center">Register a new membership</a>
                </p>
                @elseif ($auth=='register')
                <p class="mb-0">
                    <a href="{{ route('admin.login') }}" class="text-center">Login your session</a>
                </p>
                @endif
                <!-- /.social-auth-links -->

            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

    @include('admin.layout.partials.js')
</body>

</html>
