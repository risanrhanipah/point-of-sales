<!doctype html>
<html lang="en">

<head>
<title>Qubes | Login</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="Qubes Bootstrap 4x admin is super flexible, powerful, clean &amp; modern responsive admin dashboard with unlimited possibilities.">
<meta name="author" content="GetBootstrap, design by: puffintheme.com">

<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- VENDOR CSS -->
<link rel="stylesheet" href="{{asset('assets/asset/vendor/bootstrap/css/bootstrap.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/asset/vendor/font-awesome/css/font-awesome.min.css')}}">
<link rel="stylesheet" href="{{asset('assets/asset/vendor/animate-css/vivify.min.css')}}">

<!-- MAIN CSS -->
<link rel="stylesheet" href="{{asset('assets/assets/css/site.min.css')}}">

</head>

<body class="theme-blue">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
            <div class="m-t-30"><i class="fa fa-cube font-25"></i></div>
            <p>Please wait...</p>        
        </div>
    </div>
<!-- Overlay For Sidebars -->

    <div class="auth-main">
        <div class="auth_div">
            <div class="card">
                <div class="auth_brand">
                    <a class="navbar-brand" href="javascript:void(0);"><i class="fa fa-cube font-25"></i> Qubes</a>
                </div>
                <div class="body">
                    <p class="lead">Login to your account</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <label for="signin-email" class="control-label sr-only">Email</label>
                            <input type="email" name="email" class="form-control round" id="signin-email" value="Masukan E-mail" placeholder="Email">
                            @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group">
                            <label for="signin-password" class="control-label sr-only">Password</label>
                            <input type="password" name="password" class="form-control round" id="signin-password" value="thisisthepassword" placeholder="Password">
                            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group clearfix">
                            <label class="fancy-checkbox element-left">
                                <input type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                                <span>Remember me</span>
                            </label>								
                        </div>
                        <button type="submit" class="btn btn-primary btn-round btn-block">LOGIN</button>
                        <div class="bottom">
                            <span class="helper-text m-b-10"><i class="fa fa-lock"></i> <a href="page-forgot-password.html">Forgot password?</a></span>
                            <span>Don't have an account? <a href="page-register.html">Register</a></span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- END WRAPPER -->
    
<!-- Latest jQuery -->
<script src="{{asset('assets/asset/vendor/jquery/jquery-3.3.1.min.js')}}"></script>

<!-- Bootstrap 4x JS  -->
<script src="{{asset('assets/asset/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('assets/assets/bundles/vendorscripts.bundle.js')}}"></script>
<script src="{{asset('assets/assets/js/common.js')}}"></script>
</body>
</html>
