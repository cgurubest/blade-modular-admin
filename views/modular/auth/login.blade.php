<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{asset('modular/css/vendor.css')}}">
    <link rel="stylesheet" id="theme-style" href="{{asset('modular/css/app.css')}}">

</head>
<body>
<div class="auth">
    <div class="auth-container">
        <div class="card">
            <header class="auth-header">
                <h1 class="auth-title">
                    <div class="logo">
                        <span class="l l1"></span>
                        <span class="l l2"></span>
                        <span class="l l3"></span>
                        <span class="l l4"></span>
                        <span class="l l5"></span>
                    </div> ModularAdmin </h1>
            </header>
            <div class="auth-content">
                <p class="text-center">LOGIN TO CONTINUE</p>
                <form id="login-form" method="POST" action="{{ route('login') }}" novalidate="">
                    {{ csrf_field() }}


                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="username">Email</label>
                        <input type="email" class="form-control boxed" name="email" id="email" value="{{ old('email') }}" placeholder="Your email address" required> </div>
                            @if ($errors->has('email'))
                            <span class="has-error" style="color: #b40004"><strong>{{ $errors->first('email') }}</strong></span>
                            <span class="fa fa-times form-control-feedback"></span>
                            @endif


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <input type="password" class="form-control boxed" name="password" id="password" placeholder="Your password" required> </div>
                            @if ($errors->has('password'))
                                <span class="has-error" style="color: #b40004">{{ $errors->first('password') }}</span>
                                <span class="fa fa-times form-control-feedback"></span>
                            @endif

                    <div class="form-group">
                        <label for="remember">
                            <input class="checkbox" id="remember" name="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                            <span>Remember me</span>
                        </label>
                        <a href="{{ route('password.request') }}" class="forgot-btn pull-right">Forgot password?</a>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Login</button>
                    </div>
                    <div class="form-group">
                        <p class="text-muted text-center">Do not have an account?
                            <a href="{{ asset('/register') }}">Sign Up!</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>

<script src="{{asset('modular/js/vendor.js')}}"></script>
<script src="{{asset('modular/js/app.js')}}"></script>

</body>
</html>