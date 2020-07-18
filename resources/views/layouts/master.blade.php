<!DOCTYPE html>
<html lang="en" dir="">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gull - Laravel + Bootstrap 4 admin template</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link id="gull-theme" rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">
{{--       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">--}}

    @yield('style')
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/perfect-scrollbar.css')}}">

</head>
<div class="app-admin-wrap layout-sidebar-large clearfix">
    <div class="main-header">
        <div class="logo">
            <a href="{{route('index')}}"><img src="{{asset('assets/images/logo.png')}}" alt=""></a>
        </div>

        <div class="menu-toggle">
            <div></div>
            <div></div>
            <div></div>
        </div>

        <div class="d-flex align-items-center">
            <!-- Mega menu -->
            <div class="dropdown mega-menu d-none d-md-block">
                <a href="#" class="btn text-muted dropdown-toggle mr-3" id="dropdownMegaMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mega Menu</a>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="row m-0">
                        <div class="col-md-4 p-4 text-left bg-img">
                            <h2 class="title">Mega Menu <br> Sidebar</h2>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Asperiores natus laboriosam fugit, consequatur.
                            </p>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Exercitationem odio amet eos dolore suscipit placeat.</p>
                            <button class="btn btn-lg btn-rounded btn-outline-warning">Learn More</button>
                        </div>
                        <div class="col-md-4 p-4 text-left">
                            <p class="text-primary text--cap border-bottom-primary d-inline-block">Features</p>
                            <div class="menu-icon-grid w-auto p-0">
                                <a href="#"><i class="i-Shop-4"></i> Home</a>
                                <a href="#"><i class="i-Library"></i> UI Kits</a>
                                <a href="#"><i class="i-Drop"></i> Apps</a>
                                <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                                <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                                <a href="#"><i class="i-Ambulance"></i> Support</a>
                            </div>
                        </div>
                        <div class="col-md-4 p-4 text-left">
                            <p class="text-primary text--cap border-bottom-primary d-inline-block">Components</p>
                            <ul class="links">
                                <li><a href="accordion.html">Accordion</a></li>
                                <li><a href="alerts.html">Alerts</a></li>
                                <li><a href="buttons.html">Buttons</a></li>
                                <li><a href="badges.html">Badges</a></li>
                                <li><a href="carousel.html">Carousels</a></li>
                                <li><a href="lists.html">Lists</a></li>
                                <li><a href="popover.html">Popover</a></li>
                                <li><a href="tables.html">Tables</a></li>
                                <li><a href="datatables.html">Datatables</a></li>
                                <li><a href="modals.html">Modals</a></li>
                                <li><a href="nouislider.html">Sliders</a></li>
                                <li><a href="tabs.html">Tabs</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Mega menu -->
            <div class="search-bar">
                <input type="text" placeholder="Search">
                <i class="search-icon text-muted i-Magnifi-Glass1"></i>
            </div>
        </div>

        <div style="margin: auto"></div>

        <div class="header-part-right">
            <!-- Full screen toggle -->
            <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen=""></i>
            <!-- Grid menu Dropdown -->
            <div class="dropdown">
                <i class="i-Safe-Box text-muted header-icon" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" role="button" aria-expanded="false"></i>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <div class="menu-icon-grid">
                        <a href="#"><i class="i-Shop-4"></i> Home</a>
                        <a href="#"><i class="i-Library"></i> UI Kits</a>
                        <a href="#"><i class="i-Drop"></i> Apps</a>
                        <a href="#"><i class="i-File-Clipboard-File--Text"></i> Forms</a>
                        <a href="#"><i class="i-Checked-User"></i> Sessions</a>
                        <a href="#"><i class="i-Ambulance"></i> Support</a>
                    </div>
                </div>
            </div>
            <!-- Notificaiton -->
            <div class="dropdown">
                <div class="badge-top-container" id="dropdownNotification" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="badge badge-primary">3</span>
                    <i class="i-Bell text-muted header-icon"></i>
                </div>
                <!-- Notification dropdown -->
                <div class="dropdown-menu rtl-ps-none dropdown-menu-right notification-dropdown ps" aria-labelledby="dropdownNotification" data-perfect-scrollbar="" data-suppress-scroll-x="true">
                    <div class="dropdown-item d-flex">
                        <div class="notification-icon">
                            <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                        </div>
                        <div class="notification-details flex-grow-1">
                            <p class="m-0 d-flex align-items-center">
                                <span>New message</span>
                                <span class="badge badge-pill badge-primary ml-1 mr-1">new</span>
                                <span class="flex-grow-1"></span>
                                <span class="text-small text-muted ml-auto">10 sec ago</span>
                            </p>
                            <p class="text-small text-muted m-0">James: Hey! are you busy?</p>
                        </div>
                    </div>
                    <div class="dropdown-item d-flex">
                        <div class="notification-icon">
                            <i class="i-Receipt-3 text-success mr-1"></i>
                        </div>
                        <div class="notification-details flex-grow-1">
                            <p class="m-0 d-flex align-items-center">
                                <span>New order received</span>
                                <span class="badge badge-pill badge-success ml-1 mr-1">new</span>
                                <span class="flex-grow-1"></span>
                                <span class="text-small text-muted ml-auto">2 hours ago</span>
                            </p>
                            <p class="text-small text-muted m-0">1 Headphone, 3 iPhone x</p>
                        </div>
                    </div>
                    <div class="dropdown-item d-flex">
                        <div class="notification-icon">
                            <i class="i-Empty-Box text-danger mr-1"></i>
                        </div>
                        <div class="notification-details flex-grow-1">
                            <p class="m-0 d-flex align-items-center">
                                <span>Product out of stock</span>
                                <span class="badge badge-pill badge-danger ml-1 mr-1">3</span>
                                <span class="flex-grow-1"></span>
                                <span class="text-small text-muted ml-auto">10 hours ago</span>
                            </p>
                            <p class="text-small text-muted m-0">Headphone E67, R98, XL90, Q77</p>
                        </div>
                    </div>
                    <div class="dropdown-item d-flex">
                        <div class="notification-icon">
                            <i class="i-Data-Power text-success mr-1"></i>
                        </div>
                        <div class="notification-details flex-grow-1">
                            <p class="m-0 d-flex align-items-center">
                                <span>Server Up!</span>
                                <span class="badge badge-pill badge-success ml-1 mr-1">3</span>
                                <span class="flex-grow-1"></span>
                                <span class="text-small text-muted ml-auto">14 hours ago</span>
                            </p>
                            <p class="text-small text-muted m-0">Server rebooted successfully</p>
                        </div>
                    </div>
                    <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            </div>
            <!-- Notificaiton End -->

            <!-- User avatar dropdown -->
            <div class="dropdown">
                <div class="user col align-self-end">
                    <img src="{{asset('assets/images/faces/1.jpg')}}'" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                        <div class="dropdown-header">
                            <i class="i-Lock-User mr-1"></i> Timothy Carlson
                        </div>
                        <a class="dropdown-item">Account settings</a>
                        <a class="dropdown-item">Billing history</a>
                        <a class="dropdown-item" href="signin.html">Sign out</a>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="side-content-wrap">
        <div class="sidebar-left open rtl-ps-none ps ps--active-y" data-perfect-scrollbar="" data-suppress-scroll-x="true">
            <ul class="navigation-left">
                <li class="nav-item" data-item="dashboard">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Bar-Chart"></i>
                        <span class="nav-text">Dashboard</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="uikits">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Library"></i>
                        <span class="nav-text">UI kits</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="extrakits">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Suitcase"></i>
                        <span class="nav-text">Extra kits</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item active" data-item="apps">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Computer-Secure"></i>
                        <span class="nav-text">Apps</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="forms">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-File-Clipboard-File--Text"></i>
                        <span class="nav-text">Forms</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-item-hold" href="{{route('datatables')}}">
                        <i class="nav-icon i-File-Horizontal-Text"></i>
                        <span class="nav-text">Datatables</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="sessions">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Administrator"></i>
                        <span class="nav-text">Sessions</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item" data-item="others">
                    <a class="nav-item-hold" href="#">
                        <i class="nav-icon i-Double-Tap"></i>
                        <span class="nav-text">Others</span>
                    </a>
                    <div class="triangle"></div>
                </li>
                <li class="nav-item">
                    <a class="nav-item-hold" href="http://demos.ui-lib.com/gull-html-doc/" target="_blank">
                        <i class="nav-icon i-Safe-Box1"></i>
                        <span class="nav-text">Doc</span>
                    </a>
                    <div class="triangle"></div>
                </li>
            </ul>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; height: 615px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 378px;"></div></div></div>

        <div class="sidebar-left-secondary rtl-ps-none ps" data-perfect-scrollbar="" data-suppress-scroll-x="true">
            <!-- Submenu Dashboards -->
            <ul class="childNav" data-parent="dashboard" style="display: none;">
                <li class="nav-item">
                    <a href="{{route('dashboard_v1')}}" class="open">
                        <i class="nav-icon i-Clock-3"></i>
                        <span class="item-name">Version 1</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard_v2')}}">
                        <i class="nav-icon i-Clock-4"></i>
                        <span class="item-name">Version 2</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard_v3')}}">
                        <i class="nav-icon i-Over-Time"></i>
                        <span class="item-name">Version 3</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('dashboard_v4')}}">
                        <i class="nav-icon i-Clock"></i>
                        <span class="item-name">Version 4</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="forms" style="display: none;">
                <li class="nav-item">
                    <a href="{{route('form_basic')}}">
                        <i class="nav-icon i-File-Clipboard-Text--Image"></i>
                        <span class="item-name">Basic Elements</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('form_layouts')}}">
                        <i class="nav-icon i-Split-Vertical"></i>
                        <span class="item-name">Form Layouts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('form_input_group')}}">
                        <i class="nav-icon i-Receipt-4"></i>
                        <span class="item-name">Input Groups</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('form_validation')}}">
                        <i class="nav-icon i-Close-Window"></i>
                        <span class="item-name">Form Validation</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('smart_wizard')}}">
                        <i class="nav-icon i-Width-Window"></i>
                        <span class="item-name">Smart Wizard</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tag_input')}}">
                        <i class="nav-icon i-Tag-2"></i>
                        <span class="item-name">Tag Input</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('editor')}}">
                        <i class="nav-icon i-Pen-2"></i>
                        <span class="item-name">Rich Editor</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="apps" style="display: block;">
                <li class="nav-item">
                    <a href="{{route('invoice')}}">
                        <i class="nav-icon i-Add-File"></i>
                        <span class="item-name">Invoice</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('inbox')}}">
                        <i class="nav-icon i-Email"></i>
                        <span class="item-name">Inbox</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('chat')}}">
                        <i class="nav-icon i-Speach-Bubble-3"></i>
                        <span class="item-name">Chat</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="extrakits" style="display: none;">
                <li class="nav-item">
                    <a href="{{route('image_cropper')}}">
                        <i class="nav-icon i-Crop-2"></i>
                        <span class="item-name">Image Cropper</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('loaders')}}">
                        <i class="nav-icon i-Loading-3"></i>
                        <span class="item-name">Loaders</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('ladda_button')}}">
                        <i class="nav-icon i-Loading-2"></i>
                        <span class="item-name">Ladda Buttons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('toastr')}}">
                        <i class="nav-icon i-Bell"></i>
                        <span class="item-name">Toastr</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('sweet_alerts')}}">
                        <i class="nav-icon i-Approved-Window"></i>
                        <span class="item-name">Sweet Alerts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tour')}}">
                        <i class="nav-icon i-Plane"></i>
                        <span class="item-name">User Tour</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('upload')}}">
                        <i class="nav-icon i-Data-Upload"></i>
                        <span class="item-name">Upload</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="uikits" style="display: none;">
                <li class="nav-item">
                    <a href="{{route('alerts')}}">
                        <i class="nav-icon i-Bell1"></i>
                        <span class="item-name">Alerts</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('accordion')}}">
                        <i class="nav-icon i-Split-Horizontal-2-Window"></i>
                        <span class="item-name">Accordion</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('badges')}}">
                        <i class="nav-icon i-Medal-2"></i>
                        <span class="item-name">Badges</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('buttons')}}">
                        <i class="nav-icon i-Cursor-Click"></i>
                        <span class="item-name">Buttons</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('cards')}}">
                        <i class="nav-icon i-Line-Chart-2"></i>
                        <span class="item-name">Cards</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('card_metrics')}}">
                        <i class="nav-icon i-ID-Card"></i>
                        <span class="item-name">Card Metrics</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('carousel')}}">
                        <i class="nav-icon i-Video-Photographer"></i>
                        <span class="item-name">Carousels</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('lists')}}">
                        <i class="nav-icon i-Belt-3"></i>
                        <span class="item-name">Lists</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('pagination')}}">
                        <i class="nav-icon i-Arrow-Next"></i>
                        <span class="item-name">Paginations</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('popover')}}">
                        <i class="nav-icon i-Speach-Bubble-2"></i>
                        <span class="item-name">Popover</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('progressbar')}}">
                        <i class="nav-icon i-Loading"></i>
                        <span class="item-name">Progressbar</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tables')}}">
                        <i class="nav-icon i-File-Horizontal-Text"></i>
                        <span class="item-name">Tables</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tabs')}}">
                        <i class="nav-icon i-New-Tab"></i>
                        <span class="item-name">Tabs</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('tooltip')}}">
                        <i class="nav-icon i-Speach-Bubble-8"></i>
                        <span class="item-name">Tooltip</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('modals')}}">
                        <i class="nav-icon i-Duplicate-Window"></i>
                        <span class="item-name">Modals</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('nouislide')}}">
                        <i class="nav-icon i-Width-Window"></i>
                        <span class="item-name">Sliders</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="sessions" style="display: none;">
                <li class="nav-item">
                    <a href="{{route('signin')}}">
                        <i class="nav-icon i-Checked-User"></i>
                        <span class="item-name">Sign in</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('signup')}}">
                        <i class="nav-icon i-Add-User"></i>
                        <span class="item-name">Sign up</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('forgot')}}">
                        <i class="nav-icon i-Find-User"></i>
                        <span class="item-name">Forgot</span>
                    </a>
                </li>
            </ul>
            <ul class="childNav" data-parent="others" style="display: none;">
                <li class="nav-item">
                    <a href="{{route('not_found')}}">
                        <i class="nav-icon i-Error-404-Window"></i>
                        <span class="item-name">Not Found</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('user_profile')}}">
                        <i class="nav-icon i-Male"></i>
                        <span class="item-name">User Profile</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('blank')}}">
                        <i class="nav-icon i-File-Horizontal"></i>
                        <span class="item-name">Blank Page</span>
                    </a>
                </li>
            </ul>
            <div class="ps__rail-x" style="left: 0px; bottom: 0px;"><div class="ps__thumb-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__rail-y" style="top: 0px; right: 0px;"><div class="ps__thumb-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
        <div class="sidebar-overlay"></div>
    </div>
    <!--=============== Left side End ================-->

    <!-- ============ Body content start ============= -->
    <div class="main-content-wrap sidenav-open d-flex flex-column">
        @yield('content')




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
                    <img class="logo" src="{{asset('assets/images/logo.png')}}" alt="">
                    <div>
                        <p class="m-0">© 2018 Gull HTML</p>
                        <p class="m-0">All rights reserved</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- fotter end -->
    </div>
    <!-- ============ Body content End ============= -->
</div>
<!--=============== End app-admin-wrap ================-->

<!-- ============ Search UI Start ============= -->
<div class="search-ui">
    <div class="search-header o-hidden">
        <img src="{{asset('assets/images/logo.png')}}" alt="" class="logo float-left">
        <button class="search-close btn btn-icon bg-transparent float-right mt-2">
            <i class="i-Close-Window text-22 text-muted"></i>
        </button>
    </div>

    <input type="text" placeholder="Type here" class="search-input" autofocus="">

    <div class="search-title">
        <span class="text-muted">Search results</span>
    </div>

    <div class="search-results list-horizontal">
        <div class="list-item col-md-12 p-0">
            <div class="card o-hidden flex-row mb-4 d-flex">
                <div class="list-thumb d-flex">
                    <!-- TUMBNAIL -->
                    <img src="{{asset('assets/images/products/headphone-1.jpg')}}" alt="">
                </div>
                <div class="flex-grow-1 pl-2 d-flex">
                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                        <!-- OTHER DATA -->
                        <a href="" class="w-40 w-sm-100">
                            <div class="item-title">Headphone 1</div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $300
                            <del class="text-secondary">$400</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-danger">Sale</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="list-item col-md-12 p-0">
            <div class="card o-hidden flex-row mb-4 d-flex">
                <div class="list-thumb d-flex">
                    <!-- TUMBNAIL -->
                    <img src="{{asset('assets/images/products/headphone-2.jpg')}}" alt="">
                </div>
                <div class="flex-grow-1 pl-2 d-flex">
                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                        <!-- OTHER DATA -->
                        <a href="" class="w-40 w-sm-100">
                            <div class="item-title">Headphone 1</div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $300
                            <del class="text-secondary">$400</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-primary">New</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="list-item col-md-12 p-0">
            <div class="card o-hidden flex-row mb-4 d-flex">
                <div class="list-thumb d-flex">
                    <!-- TUMBNAIL -->
                    <img src="{{asset('assets/images/products/headphone-3.jpg')}}" alt="">
                </div>
                <div class="flex-grow-1 pl-2 d-flex">
                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                        <!-- OTHER DATA -->
                        <a href="" class="w-40 w-sm-100">
                            <div class="item-title">Headphone 1</div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $300
                            <del class="text-secondary">$400</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-primary">New</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>
        <div class="list-item col-md-12 p-0">
            <div class="card o-hidden flex-row mb-4 d-flex">
                <div class="list-thumb d-flex">
                    <!-- TUMBNAIL -->
                    <img src="{{asset('assets/images/products/headphone-4.jpg')}}" alt="">
                </div>
                <div class="flex-grow-1 pl-2 d-flex">
                    <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                        <!-- OTHER DATA -->
                        <a href="" class="w-40 w-sm-100">
                            <div class="item-title">Headphone 1</div>
                        </a>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100">
                            $300
                            <del class="text-secondary">$400</del>
                        </p>
                        <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                            <span class="badge badge-primary">New</span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PAGINATION CONTROL -->
    <div class="col-md-12 mt-5 text-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination d-inline-flex">
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">«</span>
                        <span class="sr-only">Previous</span>
                    </a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                        <span aria-hidden="true">»</span>
                        <span class="sr-only">Next</span>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</div>

<!-- ============ Search UI End ============= -->

<script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/perfect-scrollbar.min.js')}}"></script>

<script src="{{asset('assets/js/es5/dashboard.v1.script.min.js')}}"></script>

<script src="{{asset('assets/js/es5/script.min.js')}}"></script>
<script src="{{asset('assets/js/es5/sidebar.large.script.min.js')}}"></script>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

@yield('script')
</body>

</html>
