<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/login.html  07 Jan 2020 03:42:43 GMT -->
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="icon" href="favicon.ico" type="image/x-icon"/>

<title>:: Blog :: Login</title>

<!-- Bootstrap Core and vandor -->
<link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css')}}" />

<!-- Core css -->
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/main.css')}}"/>
<link rel="stylesheet" href="{{ asset('dashboard/assets/css/theme1.css')}}"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">


</head>
<body class="font-montserrat">

<div class="auth">
    <form action="{{ route('login')}}" method="post" autocomplete="off">
        @csrf
        <div class="auth_left">
            <div class="card">
                <div class="text-center mb-2">
                    <a class="header-brand" href="/"><i class="fa fa-soccer-ball-o brand-logo"></i></a>
                </div>
                <div class="card-body">
                    <div class="card-title">Login to your account</div>
                    
                    <div class="form-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="exampleInputEmail1" name="email"
                        aria-describedby="emailHelp" placeholder="Enter email" autocomplete="off">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="form-label">Password<a href="forgot-password.html" class="float-right small">I forgot password</a></label>
                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
                        @error('password')
                            <span class="text-danger">
                                {{$message}}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" />
                        <span class="custom-control-label">Remember me</span>
                        </label>
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary btn-block" title="">Sign in</button>
                    </div>
                </div>
                <div class="text-center text-muted">
                    Don't have account yet? <a href="{{ route('register')}}">Sign up</a>
                </div>
            </div>        
        </div>
    </form>
    <div class="auth_right full_img"></div>
</div>

<script src="{{ asset('dashboard/assets/bundles/lib.vendor.bundle.js')}}"></script>
<script src="{{ asset('dashboard/assets/js/core.js')}}"></script>
</body>
</html>