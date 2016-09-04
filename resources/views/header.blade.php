<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="improve agriculture, improve life">
    <title>Tiba</title>
    <link href="{{asset('img/ico.ico')}}" rel="icon" />
    <!-- Bootstrap -->
    @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
    <link href="{{asset('css/bootstrap_ar.css')}}" rel="stylesheet">
    @elseif(Config::get('languages')[App::getLocale()] == 'English')
    <link href="{{asset('css/bootstrap_en.css')}}" rel="stylesheet">
    @endif
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/owl.carousel.css')}}" rel="stylesheet" />
    @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
    <link href="{{asset('css/style_ar.css')}}" rel="stylesheet">
    @elseif(Config::get('languages')[App::getLocale()] == 'English')
    <link href="{{asset('css/style_en.css')}}" rel="stylesheet">
    @endif
    <link href="{{asset('css/media.css')}}" rel="stylesheet">
    <!-- javascript -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
      #news .news-details .thumbnail:hover {
          transform: scale(1, 1);
          -webkit-transition: all .3s ease-in-out;
          -o-transition: all .3s ease-in-out;
          transition: all .3s ease-in-out;
      }
  </style>
    <script src="{{asset('js/jquery.1.11.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script>
        var nice = true;
        $(document).ready(function () {
            nice = $("html").niceScroll();
        });
        var obj = window; //$(window);
        console.log(obj.length);
        console.log("selector" in obj);
    </script>

    <script>
        var nice = true;
        $(document).ready(function () {
            nice = $(".partener-img").niceScroll();
        });
        var obj = window; //$(window);
        console.log(obj.length);
        console.log("selector" in obj);
    </script>
    <script>
        $(document).ready(function () {
            $('.smoothscroll').on('click', function (e) {
                e.preventDefault();
                var target = this.hash
                    , $target = $(target);
                $('html, body').stop().animate({
                    'scrollTop': $target.offset().top
                }, 800, 'swing', function () {
                    window.location.hash = target;
                });
            });
            $(window).bind('scroll', function () {
                if ($(window).scrollTop() > 50) {
                    $('.navbar').addClass('navbar-fixed-top');
                }
                else {
                    $('.navbar').removeClass('navbar-fixed-top');
                }
            });
        });
    </script>
</head>

<body>
    <!--start header-->
    <header id="header">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-md-9 col-xs-12">
                    <div class="col-lg-2 col-md-4 col-xs-12">
                        <p> <i class="fa fa-envelope"></i> <span><a href="{{URL('/contact')}}">{{trans('home.contact')}}</a></span> </p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-xs-12">
                        <p> <i class="fa fa-phone"></i> <span>0123456789</span></p>
                    </div>
                    <div class="col-lg-2 col-md-4 col-xs-12">
                        <p>
                            <!-- <a href="#"> <i class="fa fa-globe"></i> <span>Ar</span> </a> -->
                            @foreach (Config::get('languages') as $lang => $language)
                                @if ($lang != App::getLocale())

                                        <a href="{{ route('lang.switch', $lang) }}"> <i class="fa fa-globe"></i> <span>{{$language}}</span></a>

                                @endif
                            @endforeach
                        </p>
                        <!-- <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                {{ Config::get('languages')[App::getLocale()] }}
                            </a>
                            <ul class="dropdown-menu">
                                @foreach (Config::get('languages') as $lang => $language)
                                    @if ($lang != App::getLocale())
                                        <li>
                                            <a href="{{ route('lang.switch', $lang) }}"> <i class="fa fa-globe"></i> <span>{{$language}}</span></a>
                                        </li>
                                    @endif
                                @endforeach
                            </ul>
                        </li> -->
                    </div>
                </div>
                <div class="col-md-3 col-xs-12 item">
                    <div class="row">
                      <form method="GET" action="{{ asset('/search') }}">
                        <input type="text" name="search" class="form-control" placeholder="{{trans('home.search')}}" />
                        <input type="submit"style="position: absolute; left: -9999px; width: 1px; height: 1px;"tabindex="-1" />
                      </form>
                     </div>
                </div>
            </div>
        </div>
    </header>
