<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Bog'cha</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="keywords" content="bogcha, bog'cha, 102-bogcha, det sad, detskiy sad" />

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{ asset('public/css/style.css')}}">

    @if(Request::is('/'))
        <style type="text/css">
            header{
                height: auto;
                background-image: url({{asset('public/img/bg-img.jpg')}});
            }
        </style>
    @endif

    @yield('css')

</head>

<body>

    <!-- header-start -->
    <header>
        <div class="container">
            <div class="row">
                <div class="header-area">
                    <div id="sticky-header" class="main-header-area">
                        <div class="container-fluid">
                            <div class="row align-items-center">
                                <div class="col-xl-2 d-none d-xl-block header-logo">
                                    <div class="logo">
                                        <a href="{{ route('index')}}">
                                            <img src="{{ asset('public/img/kinder-icon.jpg')}}" alt="">
                                            <span>102-MTM</span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-xl-7 col-lg-9 col-md-12">
                                    <div class="main-menu">
                                        <nav>
                                            <ul id="navigation">
                                                <li><a href="{{ route('index')}}">Bosh sahifa</a></li>
                                                <li><a href="{{ route('admission')}}">Qabul jarayoni</a></li>
                                                <li><a href="{{ route('gallery')}}">Galleriya</a></li>
                                                <li><a href="{{ route('about')}}">Biz haqimizda</a></li>
                                                <li><a href="{{ route('contact')}}">Bog'lanish</a></li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                    <div class="Appointment">
                                        <div class="book_btn d-none d-lg-block">
                                            <a href="tel:977419855"> 97 741-98-55</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="mobile_menu d-block d-lg-none"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if(Request::is('/'))
                    <div class="carousel_part">
                        <div class="greeting">
                            <span>Sehrli orom nomli<h3>102-bog'cha web sahifasiga</h3>
                                <h2>hush kelibsiz!</h2>
                            </span>
                        </div>
                        <!-- carousel start -->
                        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                          <ol class="carousel-indicators">
                            @foreach($slides as $slide)
                              <li data-target="#carouselExampleIndicators" data-slide-to="{{$loop->index}}" class="carousel-buttons">
                              </li>
                            @endforeach
                          </ol>
                          <div class="carousel-inner">
                              @foreach($slides as $slide)
                                  <div class="carousel-item">
                                      <img class="d-block" src="{{ asset('public/img/' . $slide->image)}}" alt="Carousel">
                                      <div class="carousel-caption">
                                          <h5>{{$slide->title}}</h5>
                                      </div>
                                  </div>
                              @endforeach
                          </div>
                          <a class="carousel-control-prev carousel-buttons" href="#carouselExampleIndicators" role="button"
                              data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                          </a>
                          <a class="carousel-control-next carousel-buttons" href="#carouselExampleIndicators" role="button"
                              data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                          </a>
                        </div>
                    </div>
                    <!-- carousel end -->
                @endif
            </div>
        </div>
    </header>
    <!-- header-end -->

    @yield('main')

    
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Manzil
                            </h3>
                            <ul>
                                <li>
                                    <p>Toshkent shahri, Olmazor tumani,</p>
                                    <span>Ibn Shoshiy ko'chasi, 32-uy.
                                    Tel: <a href="tel:977419855"> 97 741-98-55</a></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-md-6 col-lg-6">
                        <div class="footer_widget">
                            <h3 class="footer_title">
                                Foydali Linklar
                            </h3>
                            <ul class="d-flex justify-content-around">
                                <li>
                                    <a href="{{ route('admission')}}">Qabul jarayoni</a>
                                </li>
                                <li>
                                    <a href="{{ route('gallery')}}">Galleriya</a>
                                </li>
                                <li>
                                    <a href="{{ route('about')}}">Hodimlar</a>
                                </li>
                                <li>
                                    <a href="{{ route('contact')}}">Bog`lanish</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- JS here -->
    <script src="{{ asset('public/js/vendor/modernizr-3.5.0.min.js')}}"></script>
    <script src="{{ asset('public/js/vendor/jquery-1.12.4.min.js')}}"></script>
    <script src="{{ asset('public/js/bootstrap.js')}}"></script>
    <script src="{{ asset('public/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('public/js/jquery-2.1.4.min.js')}}"></script>
    <script src="{{ asset('public/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('public/js/jquery.fancybox.pack.js')}}"></script>
    <script src="{{ asset('public/js/jquery.mousewheel.pack.js')}}"></script>
    <script src="{{ asset('public/js/jquery.fancybox-buttons.js')}}"></script>
    <script src="{{ asset('public/js/jquery.fancybox-media.js')}}"></script>
    <script src="{{ asset('public/js/jquery.fancybox-thumbs.js')}}"></script>
    <script src="{{ asset('public/js/main.js')}}"></script>
    <script src="{{ asset('public/js/mine.js')}}"></script>

        @yield('js')

    <script>
    $(function () {
        $(".carousel-buttons:first-child").addClass("active");
    })
    </script>

</body>

</html>