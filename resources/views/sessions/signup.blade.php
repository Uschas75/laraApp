@extends('layouts.master1')
@section('style')

@endsection()
@section('content')

<body class="text-left">
<div class="auth-layout-wrap" style="background-image: url('{{asset('assets/images/photo-wide-4.jpg')}}')">
    <div class="auth-content">
        <div class="card o-hidden">
            <div class="row">
                <div class="col-md-6 text-center " style="background-size: cover;background-image: url('{{asset('assets/images/photo-long-3.jpg')}}')">
                    <div class="pl-3 auth-right">
                        <div class="auth-logo text-center mt-4">
                            <img src="assets/images/logo.png" alt="">
                        </div>
                        <div class="flex-grow-1"></div>
                        <div class="w-100 mb-4">
                            <a class="btn btn-outline-primary btn-block btn-icon-text btn-rounded" href="signin.html">
                                <i class="i-Mail-with-At-Sign"></i> Sign in with Email
                            </a>
                            <a class="btn btn-outline-google btn-block btn-icon-text btn-rounded">
                                <i class="i-Google-Plus"></i> Sign in with Google
                            </a>
                            <a class="btn btn-outline-facebook btn-block btn-icon-text btn-rounded">
                                <i class="i-Facebook-2"></i> Sign in with Facebook
                            </a>
                        </div>
                        <div class="flex-grow-1"></div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="p-4">

                        <h1 class="mb-3 text-18">Sign Up</h1>
                        <form action="">
                            <div class="form-group">
                                <label for="username">Your name</label>
                                <input id="username" class="form-control form-control-rounded" type="text">
                            </div>
                            <div class="form-group">
                                <label for="email">Email address</label>
                                <input id="email" class="form-control form-control-rounded" type="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input id="password" class="form-control form-control-rounded" type="password">
                            </div>
                            <div class="form-group">
                                <label for="repassword">Retype password</label>
                                <input id="repassword" class="form-control form-control-rounded" type="password">
                            </div>
                            <button class="btn btn-primary btn-block btn-rounded mt-3">Sign Up</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection()
@section('script')
    <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/perfect-scrollbar.min.js')}}"></script>



    <script src="{{asset('assets/js/es5/script.min.js')}}"></script>
    <script src="{{asset('assets/js/es5/sidebar.large.script.min.js')}}"></script>


    <script src="{{asset('assets/js/sidebar.script.js')}}"></script>
@endsection()
