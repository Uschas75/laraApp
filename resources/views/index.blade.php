<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gull - Laravel + Bootstrap 4 admin template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">
    <style>
        .loadscreen {
            text-align: center;
            position: fixed;
            width: 100%;
            left: 0;
            right: 0;
            margin: auto;
            top: 0;
            height: 100vh;
            background: #ffffff;
        }

        .loadscreen .loader {
            position: absolute;
            top: calc(50vh - 50px);
            left: 0;
            right: 0;
            margin: auto;
        }

        .loadscreen .logo {
            display: inline-block !important;
            width: 80px;
            height: 80px;
        }
    </style>
</head>

<body>
<div class="auth-layout-wrap" style="background-image: url({{asset('assets/images/photo-wide-4.jpg')}})">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="p-3 text-center">
                    <a href="http://gull-laravel.ui-lib.com/" target="_blank">
                        <img class="mb-4" src="{{asset('assets/images/screenshots/dashboard.v1.png')}}" alt="">
                    </a>
                    <a class="btn btn-lg btn-primary" href="http://gull-laravel.ui-lib.com/" target="_blank">
                        <img src="{{asset('assets/images/laravel-logo.png')}}" alt="" style="height: 20px; margin-right: 8px">
                        Open Laravel Version
                    </a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="p-3 text-center">
                    <a href="dashboard.v1.html" target="_blank">
                        <img class="mb-4" src="{{asset('assets/images/screenshots/dashboard.v2.png')}}" alt="">
                    </a>
                    <a class="btn btn-lg btn-primary" href="{{route('dashboard_v1')}}" target="_blank">
                        <img src="{{asset('assets/images/bootstrap-logo.png')}}" alt="" style="height: 20px; margin-right: 8px">
                        Open HTML Version
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

{{--<div class="loadscreen">--}}
{{--    <div class="loader">--}}
{{--        <img src="{{asset('assets/images/logo.png')}}" class="logo mb-3" style="display: none" alt="">--}}
{{--        <div class="loader-bubble loader-bubble-primary d-block"></div>--}}
{{--    </div>--}}
{{--</div>--}}

<script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/es5/script.min.js')}}"></script>
<script>
    /* -----------------------------
    Pre Loader
    ----------------------------- */
    $(window).on('load', function () {
        'use strict';
        $('.loadscreen').delay(500).fadeOut();
        // $('#preloader').delay(800).fadeOut('slow');
    });
</script>
</body>

</html>
