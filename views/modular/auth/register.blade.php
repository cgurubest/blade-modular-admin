<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{asset('modular/css/vendor.css')}}">
    <link rel="stylesheet" id="theme-style" href="{{asset('modular/css/app.css')}}">
    <!-- Place favicon.ico in the root directory -->
    <!-- Theme initialization -->
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
                <p class="text-center">SIGNUP TO GET INSTANT ACCESS</p>
                <form id="signup-form" method="POST" action="{{ route('register') }}" novalidate="">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="firstname">Name</label>
                        <input type="text" class="form-control boxed" name="name" id="firstname" value="{{ old('name') }}" placeholder="Enter name" required="">
                        @if ($errors->has('name'))
                            <span class="has-error" style="color: #b40004"><strong>{{ $errors->first('name') }}</strong></span>
                        @endif
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email">Email</label>
                        <input type="email" class="form-control boxed" name="email" id="email" placeholder="Enter email address" value="{{ old('email') }}" required="">
                        @if ($errors->has('email'))
                            <span class="has-error" style="color: #b40004"><strong>{{ $errors->first('email') }}</strong></span>
                        @endif
                    </div>


                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password">Password</label>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="password" class="form-control boxed" name="password" id="password" placeholder="Enter password" required="">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control boxed" name="password_confirmation" id="retype_password" placeholder="Re-type password" required="">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-12">
                                @if ($errors->has('password'))
                                    <span class="has-error" style="color: #b40004"><strong>{{ $errors->first('password') }}</strong></span>
                                @endif</div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="agree">
                            <input class="checkbox" name="agree" id="agree" type="checkbox" required="">
                            <span>Agree the terms and
                                        <a href="#">policy</a>
                                    </span>
                        </label>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                    </div>
                    <div class="form-group">
                        <p class="text-muted text-center">Already have an account?
                            <a href="login.html">Login!</a>
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



</body>
</html>