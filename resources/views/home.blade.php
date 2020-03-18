@extends('layouts.app')

@section('sidebar')
    {{--    <div class="container">--}}
    {{--        <div class="row ">--}}
    <div class="col-2 sidebar">
        {{--                <h3>sidebar</h3>--}}
        <ul>
            <li><a href="{{route('myPage')}}">My page</a></li>
            <li><a href="#">Friends</a></li>
            <li><a href="{{route('home')}}">News</a></li>
            <li><a href="#">Message</a></li>
            <li><a href="#">Chat</a></li>
            <li><a href="#">Gallery</a></li>
        </ul>
    </div>
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
@section('content')
    {{--    <div class="container">--}}
    {{--        <div class="row justify-content-center">--}}
    <div class="col-10 content-box">
        {{--        <h1>main content</h1>--}}
        {{--        <div class="card mb-3">--}}
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ Auth::user()->name }}</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda
                    distinctio et, ex facereimpedit, incidunt ipsam minus natus necessitatibus nostrum optio perferendis
                    voluptates. Maiores
                    nihil pariatur quo saepe ullam?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda distinctio et, ex facere
                    impedit, incidunt ipsam minus natus necessitatibus nostrum optio perferendis voluptates. Maiores
                    nihil pariatur quo saepe ullam?</p>
            </div>
            <img style="height: 20%;" src="img/1.jpg" class="card-img-top content-box-img " alt="">
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
    </div>
    {{--        <div class="col-md-8">--}}
    {{--            <div class="card">--}}
    {{--                <div class="card-header">Dashboard</div>--}}

    {{--                <div class="card-body">--}}
    {{--                    @if (session('status'))--}}
    {{--                        <div class="alert alert-success" role="alert">--}}
    {{--                            {{ session('status') }} --}}
    {{--                        </div>--}}
    {{--                    @endif--}}

    {{--                    You are logged in!--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
@endsection
