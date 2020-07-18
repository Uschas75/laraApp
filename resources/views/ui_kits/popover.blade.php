@extends('layouts.master')
@section('style')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/perfect-scrollbar.css')}}">
@endsection()
@section('content')
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        <div class="breadcrumb">
            <h1>Popover</h1>
            <ul>
                <li><a href="">UI Kits</a></li>
                <li>Popover</li>
            </ul>
        </div>

        <div class="separator-breadcrumb border-top"></div>
        <div class="row">
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-2">Example</div>
                        <button type="button" class="btn btn-danger" data-toggle="popover" title="Popover title" data-content="And here's some amazing content. It's very engaging. Right?">Click to
                            toggle popover</button>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-2">Four directions</div>
                        <p>Four options are available: top, right, bottom, and left aligned.</p>
                        <button type="button" class="btn btn-primary m-1" data-container="body" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on top
                        </button>

                        <button type="button" class="btn btn-primary m-1" data-container="body" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on right
                        </button>

                        <button type="button" class="btn btn-primary m-1" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                                  sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on bottom
                        </button>

                        <button type="button" class="btn btn-primary" data-container="body" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
                            Popover on left
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="card-title mb-2">Dismiss on next click</div>
                        <p>Use the <code>focus</code> trigger to dismiss popovers on the user’s next click of a different element than the toggle element.</p>
                        <a tabindex="0" class="btn btn-lg btn-danger" role="button" data-toggle="popover" data-trigger="focus" title="Dismissible popover" data-content="And here's some amazing content. It's very engaging. Right?">Dismissible popover</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- Footer Start -->
        <div class="flex-grow-1"></div>
        <div class="app-footer">
            <div class="row">
                <div class="col-md-9">
                    <p><strong>Gull - Laravel + Bootstrap 4 admin template</strong></p>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero quis beatae officia saepe perferendis voluptatum minima eveniet voluptates dolorum, temporibus nisi maxime nesciunt totam repudiandae commodi sequi dolor quibusdam
                        sunt.
                    </p>
                </div>
            </div>
            <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                <a class="btn btn-primary text-white btn-rounded" href="https://themeforest.net/user/mh_rafi" target="_blank">Buy
                    Gull HTML</a>
                <span class="flex-grow-1"></span>
                <div class="d-flex align-items-center">
                    <img class="logo" src="./assets/images/logo.png" alt="">
                    <div>
                        <p class="m-0">&copy; 2018 Gull HTML</p>
                        <p class="m-0">All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- fotter end -->


    </div>
@endsection
@section('script')
    <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/perfect-scrollbar.min.js')}}"></script>



    <script src="{{asset('assets/js/es5/script.min.js')}}"></script>
    <script src="{{asset('assets/js/es5/sidebar.large.script.min.js')}}"></script>


    <script src="{{asset('assets/js/sidebar.script.js')}}"></script>
    <script>
    $("[data-toggle=popover]").popover();
    </script>

@endsection()
