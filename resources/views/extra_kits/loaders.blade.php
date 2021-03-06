@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/cropper.min.css')}}">
@endsection()
@section('content')



    <div class="breadcrumb">
        <h1>Loaders</h1>
        <ul>
            <li><a href="">UI Kits</a></li>
            <li>Loaders</li>
        </ul>
    </div>

    <div class="separator-breadcrumb border-top"></div>
    <div class="row">
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-4">Ripple Spinners</div>
                    <span class="spinner-glow spinner-glow-primary mr-5"></span>
                    <span class="spinner-glow spinner-glow-secondary mr-5"></span>
                    <span class="spinner-glow spinner-glow-warning mr-5"></span>
                    <span class="spinner-glow spinner-glow-danger mr-5"></span>
                    <span class="spinner-glow spinner-glow-success mr-5"></span>
                    <span class="spinner-glow spinner-glow-info mr-5"></span>
                    <span class="spinner-glow spinner-glow-light mr-5"></span>
                    <span class="spinner-glow spinner-glow-dark mr-5"></span>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-4">Loading Spinners</div>
                    <div class="spinner spinner-primary mr-3"></div>
                    <div class="spinner spinner-secondary mr-3"></div>
                    <div class="spinner spinner-warning mr-3"></div>
                    <div class="spinner spinner-danger mr-3"></div>
                    <div class="spinner spinner-success mr-3"></div>
                    <div class="spinner spinner-info mr-3"></div>
                    <div class="spinner spinner-light mr-3"></div>
                    <div class="spinner spinner-dark mr-3"></div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-4">Bubble Spinners</div>

                    <div class="spinner-bubble spinner-bubble-primary m-5"></div>
                    <div class="spinner-bubble spinner-bubble-secondary m-5"></div>
                    <div class="spinner-bubble spinner-bubble-warning m-5"></div>
                    <div class="spinner-bubble spinner-bubble-danger m-5"></div>
                    <div class="spinner-bubble spinner-bubble-success m-5"></div>
                    <div class="spinner-bubble spinner-bubble-info m-5"></div>
                    <div class="spinner-bubble spinner-bubble-light m-5"></div>
                    <div class="spinner-bubble spinner-bubble-dark m-5"></div>
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="card-title mb-4">Bubble Spinners</div>
                    <div class="loader-bubble loader-bubble-primary m-5"></div>
                    <div class="loader-bubble loader-bubble-secondary m-5"></div>
                    <div class="loader-bubble loader-bubble-success m-5"></div>
                    <div class="loader-bubble loader-bubble-warning m-5"></div>
                    <div class="loader-bubble loader-bubble-danger m-5"></div>
                    <div class="loader-bubble loader-bubble-info m-5"></div>
                    <div class="loader-bubble loader-bubble-light m-5"></div>
                    <div class="loader-bubble loader-bubble-dark m-5"></div>
                </div>
            </div>
        </div>
    </div>

@endsection()
@section('script')
    <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/cropper.min.js')}}"></script>
    <script src="{{asset('assets/js/es5/script.min.js')}}"></script>
    <script src="{{asset('assets/js/es5/sidebar.large.script.min.js')}}"></script>

    <script src="{{asset('assets/js/cropper.script.js')}}"></script>
@endsection()






