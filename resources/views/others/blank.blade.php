@extends('layouts.master')
@section('style')

@endsection()
@section('content')
    <div class="main-content">
        <div class="breadcrumb">
            <h1>Blank Page</h1>
            <ul>
                <li><a href="">UI Kits</a></li>
                <li>Blank Page</li>
            </ul>
        </div>

        <div class="separator-breadcrumb border-top"></div>

        <!-- content goes here -->


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
