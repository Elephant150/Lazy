@extends('layouts.app')
{{--@yield('title')--}}
{{--{{$title ?? ''}}--}}
{{--<!DOCTYPE html>--}}
{{--<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">--}}
{{--    <head>--}}
{{--        <meta charset="utf-8">--}}
{{--        <meta name="viewport" content="width=device-width, initial-scale=1">--}}

{{--        <title>Laravel</title>--}}

{{--        <!-- Fonts -->--}}
{{--        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">--}}

{{--        <!-- Styles -->--}}
{{--        <style>--}}
{{--            html, body {--}}
{{--                background-color: #fff;--}}
{{--                color: #636b6f;--}}
{{--                font-family: 'Nunito', sans-serif;--}}
{{--                font-weight: 200;--}}
{{--                height: 100vh;--}}
{{--                margin: 0;--}}
{{--            }--}}

{{--            .full-height {--}}
{{--                height: 100vh;--}}
{{--            }--}}

{{--            .flex-center {--}}
{{--                align-items: center;--}}
{{--                display: flex;--}}
{{--                justify-content: center;--}}
{{--            }--}}

{{--            .position-ref {--}}
{{--                position: relative;--}}
{{--            }--}}

{{--            .top-right {--}}
{{--                position: absolute;--}}
{{--                right: 10px;--}}
{{--                top: 18px;--}}
{{--            }--}}

{{--            .content {--}}
{{--                text-align: center;--}}
{{--            }--}}

{{--            .title {--}}
{{--                font-size: 84px;--}}
{{--            }--}}

{{--            .links > a {--}}
{{--                color: #636b6f;--}}
{{--                padding: 0 25px;--}}
{{--                font-size: 13px;--}}
{{--                font-weight: 600;--}}
{{--                letter-spacing: .1rem;--}}
{{--                text-decoration: none;--}}
{{--                text-transform: uppercase;--}}
{{--            }--}}

{{--            .m-b-md {--}}
{{--                margin-bottom: 30px;--}}
{{--            }--}}
{{--        </style>--}}
{{--    </head>--}}
{{--    <body>--}}
{{--        <div class="flex-center position-ref full-height">--}}
{{--            @if (Route::has('login'))--}}
{{--                <div class="top-right links">--}}
{{--                    @auth--}}
{{--                        <a href="{{ url('/home') }}">Home</a>--}}
{{--                    @else--}}
{{--                        <a href="{{ route('login') }}">Login</a>--}}

{{--                        @if (Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}">Register</a>--}}
{{--                        @endif--}}
{{--                    @endauth--}}
{{--                </div>--}}
{{--            @endif--}}

{{--            <div class="content">--}}
{{--                <div class="title m-b-md">--}}
{{--                    Laravel--}}
{{--                </div>--}}

{{--                <div class="links">--}}
{{--                    <a href="https://laravel.com/docs">Docs</a>--}}
{{--                    <a href="https://laracasts.com">Laracasts</a>--}}
{{--                    <a href="https://laravel-news.com">News</a>--}}
{{--                    <a href="https://blog.laravel.com">Blog</a>--}}
{{--                    <a href="https://nova.laravel.com">Nova</a>--}}
{{--                    <a href="https://forge.laravel.com">Forge</a>--}}
{{--                    <a href="https://vapor.laravel.com">Vapor</a>--}}
{{--                    <a href="https://github.com/laravel/laravel">GitHub</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </body>--}}
{{--</html>--}}
@section('content')
    <div class="container">
        <div class="row center">
            <div class="col-12 welcomeBlock">
                <p class="titleBlock">Welcome to my site.</p>
            </div>
        </div>
        <div class="row">
                <div class="tline">
                    <div class="card scale">
                        <img src="img/1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's
                                content.</p>
                        </div>
                    </div>
                </div>
                <div class="tline">
                    <div class="card scale">
                        <img src="img/8.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's
                                content.</p>
                        </div>
                    </div>
                </div>
                <div class="tline">
                    <div class="card scale">
                        <img src="img/7.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's
                                content.</p>
                        </div>
                    </div>
                </div>
        </div>
    </div>

@endsection

@section('footer')
    <!-- Footer -->
    <footer class="page-footer font-small mdb-color pt-4">

        <!-- Footer Links -->
        <div class="container text-center text-md-left">

            <!-- Footer links -->
            <div class="row text-center text-md-left mt-3 pb-3">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Lazy</h6>
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                        amet,
                        consectetur
                        adipisicing elit.</p>
                </div>
                <!-- Grid column -->

                <hr class="w-100 clearfix d-md-none">

                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                    <p>
                        <a href="#">Your Account</a>
                    </p>
                    <p>
                        <a href="#">About</a>
                    </p>
                    <p>
                        <a href="#">Help</a>
                    </p>
                </div>

                <!-- Grid column -->
                <hr class="w-100 clearfix d-md-none">

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                    <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                    <p>
                        <i class="fas fa-home mr-3"></i> TERNOPIL, TE 46002, UA</p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 380 96 000 0000</p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 380 97 111 1111</p>
                </div>
                <!-- Grid column -->

            </div>
            <!-- Footer links -->

            <hr>

            <!-- Grid row -->
            <div class="row d-flex align-items-center">

                <!-- Grid column -->
                <div class="col-md-7 col-lg-8 ">

                    <!--Copyright-->
                    <p class="text-center text-md-left">© 2020 Copyright:
                        <a href="#">
                            <strong> GitHub.com</strong>
                        </a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-5 col-lg-4 ml-lg-0 ">

                    <!-- Social buttons -->
                    <div class="text-center text-md-right">
                        <ul class="list-unstyled list-inline">
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                    <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                </a>
                            </li>
                        </ul>
                    </div>

                </div>
                <!-- Grid column -->

            </div>
            <!-- Grid row -->

        </div>
        <!-- Footer Links -->

    </footer>
    <!-- Footer -->

@endsection
@section('footer')
    <!-- Footer -->
        <footer class="page-footer font-small mdb-color pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Footer links -->
                <div class="row text-center text-md-left mt-3 pb-3">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Lazy</h6>
                        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                            amet,
                            consectetur
                            adipisicing elit.</p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none">

                    <hr class="w-100 clearfix d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                        <p>
                            <a href="#">Your Account</a>
                        </p>
                        <p>
                            <a href="#">About</a>
                        </p>
                        <p>
                            <a href="#">Help</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p>
                            <i class="fas fa-home mr-3"></i> TERNOPIL, TE 46002, UA</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 380 96 000 0000</p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 380 97 111 1111</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Footer links -->

                <hr>

                <!-- Grid row -->
                <div class="row d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8 ">

                        <!--Copyright-->
                        <p class="text-center text-md-left">© 2020 Copyright:
                            <a href="#">
                                <strong> GitHub.com</strong>
                            </a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0 ">

                        <!-- Social buttons -->
                        <div class="text-center text-md-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                        <a href="#"><i class="fab fa-twitter"></i></a>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a class="btn-floating btn-sm rgba-white-slight mx-1">
                                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                                    </a>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->

        </footer>
        <!-- Footer -->

    @endsection
{{--    @yield('footer')--}}
