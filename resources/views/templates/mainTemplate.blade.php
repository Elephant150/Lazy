@include('templates.header')
@yield('header')

<div class="container">
    <div class="row center">
        <div class="col-12 welcomeBlock">
            <p class="titleBlock">Welcome to my site.</p>
        </div>
    </div>
    <div class="row">
        @section('block')
            <div class="tline">
                <div class="card" >
                    <img src="img/6023.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="tline">
                <div class="card" >
                    <img src="img/6033.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                    </div>
                </div>
            </div>
            <div class="tline">
                <div class="card" >
                    <img src="img/0801.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                            the card's
                            content.</p>
                    </div>
                </div>
            </div>
        @show
    </div>
</div>


@include('templates.footer')
@yield('footer')
