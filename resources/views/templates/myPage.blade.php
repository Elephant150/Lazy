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
    <div class="col-10">
        <div class="grid-container">
            <div class="item2">
                <img src="img/8.jpg" alt="">
                <button type="button" class="btn btn-secondary">Add to friends</button>
            </div>
            <div class="item3">
                <a href="{{route('myPage')}}">{{ Auth::user()->name }}</a>
                <hr style="background-color: #343a40">
                <ul style="list-style-type: none">
                    <li>City:</li>
                    <li>Birthday:</li>
                    <li>Phone number:</li>
                    {{--                    <li></li>--}}
                    {{--                    <li>asdasd</li>--}}
                </ul>

                <hr style="background-color: #343a40; margin-bottom: 70px">
            </div>
            <div class="item4">
                <ul>
                    <li>Friends</li>
                    <li>Text1</li>
                    <li>Text2</li>
                </ul>
            </div>
            <div class="item5">
                <div class="col-10 content-box">
                    {{--        <h1>main content</h1>--}}
                    {{--        <div class="card mb-3">--}}
                    <div class="card" style="width: 124%;">
                        <div class="card-body">
                            <a href="#">{{ Auth::user()->name }}</a>
                            <hr>
                            <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid
                                assumenda
                                distinctio et, ex facereimpedit, incidunt ipsam minus natus necessitatibus nostrum optio
                                perferendis
                                voluptates. Maiores
                                nihil pariatur quo saepe ullam?
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid assumenda distinctio
                                et, ex facere
                                impedit, incidunt ipsam minus natus necessitatibus nostrum optio perferendis voluptates.
                                Maiores
                                nihil pariatur quo saepe ullam?</p>
                        </div>
                        <img style="height: 20%;" src="img/1.jpg" class="card-img-top content-box-img " alt="">
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
