<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Van Vu</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>

    <!-- Bootstrap -->
    {{--<link rel="stylesheet" href="../../../public/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">

    <!-- Font Awesome -->
    {{--<link rel="stylesheet" href="../../../public/css/font-awesome.min.css">--}}
    <link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset("public/css/font-awesome.min.css")}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset("public/css/owl.carousel.css")}}">
    <link rel="stylesheet" href="{{asset("public/style.css")}}">
    <link rel="stylesheet" href="{{asset("public/css/responsive.css")}}">
    @yield('style')
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <style>
        #toast-container > .toast {
            background-image: none !important;
        }

        #toast-container > .toast:before {
            position: fixed;
            font-family: FontAwesome;
            font-size: 24px;
            line-height: 18px;
            float: left;
            color: #FFF;
            padding-right: 0.5em;
            margin: auto 0.5em auto -1.5em;
        }
        #toast-container > .toast-warning:before {
            content: "\f003";
        }
        #toast-container > .toast-error:before {
            content: "\f001";
        }
        #toast-container > .toast-info:before {
            content: "\f005";
        }
        #toast-container > .toast-success:before {
            content: "\f002";
        }
        #toast-container{margin-top:60px}
    </style>
</head>
<body>
    @include('pages.layouts.header')
    @yield('content')
    @include('pages.layouts.footer')

    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <!-- jQuery sticky menu -->
    <script src="{{asset('public/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('public/js/jquery.sticky.js')}}"></script>
    <!-- jQuery easing -->
    <script src="{{asset('public/js/jquery.easing.1.3.min.js')}}"></script>
    <script src="{{asset('public/js/main.js')}}"></script>
    <!-- Slider -->
    <script type="text/javascript" src="{{asset('public/js/bxslider.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('public/js/script.slider.js')}}"></script>
    @yield('script')
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <script type="text/javascript">
       
    </script>
</body>
</html>