<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SEA Games Event Website</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{asset('css/general.css')}}" rel="stylesheet" />
        <style>
              .carousel-image {
                    width: 100%;
                    height: 600px;
                    object-fit: cover;
                    margin-left: auto;
                    margin-right: auto;
                }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="/frontend/sport/index"><img src="/img/sea-game-logo.png" width="70px" height="100px" alt=""></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{url('/frontend/sport/index')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/frontend/sport/list')}}">Sport</a></li>
                    </ul>
                    <form class="d-flex">
                            <a style="font-size: 20px; margin-top: 3px; color:black" href="{{url('/frontend/sport/search')}}"><i class="fa-solid fa-magnifying-glass"></i></a>
                    </form>
                </div>
            </div>
        </nav>    
        
        <!-- Carousel Slide Show -->
        @if(url()->current()== url('/frontend/sport/index'))
        <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block carousel-image" src="/img/soccer.jpg" alt="">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block carousel-image" src="/img/basketball.jpg"alt="">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block carousel-image" src="/img/e-sport.jpg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        @endif
    </header>
        
        <!-- Section-->
        <section class="py-5">
        @yield('content')
        </section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{asset('js/general.js')}}"></script>
        <script src="https://kit.fontawesome.com/692702b2fd.js" crossorigin="anonymous"></script>

    </body>
</html>
