@extends('root.root')

@section('head-property')
    {{-- Tell the browser to be responsive to screen width --}}
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    {{-- Favicon--}}
    <link rel="manifest" href="{{asset('/manifest.min.json')}}">
    <link rel="apple-touch-icon" href="{{asset('/icon.png')}}">
@endsection

@section('head-css-pre')
    {{-- Normalize --}}
    <link rel="stylesheet" href="{{asset('/assets/vendor/html5-boilerplate/dist/css/normalize.min.css')}}">
    {{-- Main --}}
    <link rel="stylesheet" href="{{asset('/assets/vendor/html5-boilerplate/dist/css/main.min.css')}}">
    {{----}}
@endsection

@section('head-js-post')
    {{--Modernizr--}}
    <script type="text/javascript" src="{{asset('/assets/vendor/html5-boilerplate/dist/js/vendor/modernizr-3.6.0.min.js')}}"></script>
    {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
    {{-- WARNING: Respond.js doesn't work if you view the page via file:// --}}
    <!--[if lt IE 9]>
    <script type="text/javascript" src="{{asset('/assets/vendor/html5shiv/dist/html5shiv.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/vendor/respond.js/dest/respond.min.js')}}"></script>
    <![endif]-->
    @endsection

@section('body-upgrade-browser')
    <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an
        <strong>outdated</strong>
                              browser. Please
        <a href="https://browsehappy.com/">upgrade your browser</a>
                              to improve your experience and security.
    </p>
    <![endif]-->
@endsection

@section('body-js-lower-pre')
    {{-- Jquery --}}
    <script type="text/javascript" src="{{asset('/assets/vendor/jquery/dist/jquery.min.js')}}"></script>
    <script type="text/javascript">window.jQuery || document.write('<script src="{{asset('/assets/vendor/jquery/dist/jquery.min.js')}}"><\/script>')</script>
    {{-- Plugins --}}
    <script type="text/javascript" src="{{asset('/assets/vendor/html5-boilerplate/dist/js/plugins.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('/assets/vendor/js-cookie/src/js.cookie.min.js')}}"></script>
@endsection
