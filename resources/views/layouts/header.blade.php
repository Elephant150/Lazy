<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="fa/css/all.css" rel="stylesheet">
    <title>@yield('title', $title ?? '')</title>
</head>
<body>
@section('header')

{{--    <div class="contain">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-12 ">--}}

{{--                    <nav class="navbar navbar-expand-md navbar-dark bg-dark">--}}
{{--                        <a href="#" class="navbar-brand">Lazy</a>--}}
{{--                        <button type="button" class="navbar-toggler" data-toggle="collapse"--}}
{{--                                data-target="#navbarCollapse">--}}
{{--                            <span class="navbar-toggler-icon"></span>--}}
{{--                        </button>--}}

{{--                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">--}}
{{--                            <div class="navbar-nav">--}}
{{--                                <a href="#1" class="nav-item nav-link">Home</a>--}}
{{--                                <a href="#2" class="nav-item nav-link">Profile</a>--}}

{{--                            </div>--}}
{{--                            <form class="form-inline">--}}
{{--                                <div class="input-group">--}}
{{--                                    <input type="text" class="form-control" placeholder="Search">--}}
{{--                                    <div class="input-group-append">--}}
{{--                                        <button type="button" class="btn btn-secondary"><i class="fa fa-search"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </form>--}}
{{--                            <div class="navbar-nav">--}}
{{--                                <a href="#3" class="nav-item nav-link">Login</a>--}}
{{--                                @if (Route::has('login'))--}}
{{--                                        @auth--}}
{{--                                        @else--}}
{{--                                            <a href="{{ route('login') }}" class="nav-item nav-link">Login</a>--}}

{{--                                            @if (Route::has('register'))--}}
{{--                                                <a href="{{ route('register') }}" class="nav-item nav-link">Register</a>--}}
{{--                                            @endif--}}
{{--                                        @endauth--}}
{{--                                @endif--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </nav>--}}

{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection




