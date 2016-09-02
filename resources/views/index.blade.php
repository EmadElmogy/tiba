@extends('layouts.base')
@section('base_content')

<!--start slider-->
   <div id="slider">
       <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
           <!-- Indicators -->
           <ol class="carousel-indicators">
             <?php $item_counter=0; $active_count=0; ?>
             @foreach($sliders as $slider)
               <li data-target="#carousel-example-generic" data-slide-to="{{$item_counter}}" <?php if($item_counter==0){ ?> class="active" <?php } ?>></li>
               <?php $item_counter++; ?>
                @endforeach
           </ol>
           <!-- Wrapper for slides -->
           <div class="overlay"></div>
           <div class="carousel-inner" role="listbox">

             @foreach($sliders as $slider)
               @if($active_count==0)
               <div class="item active">
                @else
                <div class="item">
                @endif
                 <img src="{{URL($slider->image)}}" alt="slide1">
                   <div class="carousel-caption">
                     @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                       <h1>{{$slider->title_ar}}</h1>
                       <p>{{$slider->desc_ar}}</p>
                       @elseif(Config::get('languages')[App::getLocale()] == 'English')
                       <h1>{{$slider->title_en}}</h1>
                       <p>{{$slider->desc_en}}</p>
                       @endif
                   </div>
               </div>
               <?php $active_count++; ?>
               @endforeach

           </div>
           <!-- Controls -->
           <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
           </a>
           <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
           </a>--></div>
         </div>
       </div>

   <!--start about-->
   <div id="about">
       <div class="container">
           <div class="row">
               <div class="col-xs-12">
                   <div class="row text-center">
                       <h2 class="title">{{trans('home.about')}}</h2> </div>
                   <div class="col-md-6 col-xs-12"> <img src="{{URL($about->image)}}" class="img-responsive" /> </div>
                   <div class="col-md-6 col-xs-12">
                     @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                       <h2>{{$about->title_ar}}</h2>
                       <p>{{$about->hint_ar}}</p>
                       <div class="divider"></div>
                       <p>{{$about->desc_ar}}</p>
                       @elseif(Config::get('languages')[App::getLocale()] == 'English')
                       <h2>{{$about->title_en}}</h2>
                       <p>{{$about->hint_en}}</p>
                       <div class="divider"></div>
                       <p>{{$about->desc_en}}</p>
                       @endif
                       <!--<div class="row">
                           <div class="text-center">
                               <div class="col-md-4 col-xs-12">
                                   <h1 id="number1" class="number">68</h1>
                                   <p>persons mentored</p>
                               </div>
                               <div class="col-md-4 col-xs-12">
                                   <h1 id="number2" class="number">45</h1>
                                   <p>workshop attended</p>
                               </div>
                               <div class="col-md-4 col-xs-12">
                                   <h1 id="number3" class="number">12</h1>
                                   <p>coaching certificates</p>
                               </div>
                           </div>
                       </div>
                       <hr />-->
                       <!--<a href="#">more<i class="fa fa-long-arrow-right"></i></a>-->
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!--start parteners-->
   <div id="partener">
       <div class="container">
           <div class="row">
               <div class="col-xs-12">
                   <div class="row text-center">
                       <h2 class="title">{{trans('home.partners')}}</h2> </div>
                   <div class="container partener-img">
                       <div class="row">
                         @foreach($partners as $partner)
                           <div class="col-lg-2 col-md-3 col-sm-4 col-xs-6">
                               <a href="partener-details.html">
                                   <img src="{{URL($partner->image)}}" alt="Owl Image" class="img-responsive" />
                               </a>
                           </div>
                           @endforeach

                   </div>
               </div>
           </div>
       </div>
   </div>
 </div>

   <!--start service-->
   <div id="service">
       <div class="container">
           <div class="row">
               <div class="col-xs-12">
                   <div class="row text-center">
                       <h2 class="title">{{trans('home.service')}}</h2> </div>
                       @foreach($services as $service)
                   <div class="col-sm-6 col-xs-12">
                       <div class="service-details">
                           <div class="row">
                               <div class="col-md-6 col-xs-12"> <img src="{{URL($service->image)}}" alt="img1" class="img-responsive"> </div>
                               <div class="col-md-6 col-xs-12">
                                 @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                   <h3>{{$service->title_ar}}</h3>
                                   <p>{{$service->desc_ar}}</p>
                                   <a href="services-details.html" class="btn btn-default">المزيد</a>
                                   @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                                   <h3>{{$service->title_en}}</h3>
                                   <p>{{$service->desc_en}}</p>
                                   <a href="services-details.html" class="btn btn-default">more</a>
                                   @endif
                                 </div>
                           </div>
                       </div>
                   </div>
                   @endforeach
                   <div class="row text-center"><a href="services.html" class="btn btn-default" role="button">{{trans('home.more')}}</a> </div>
               </div>
           </div>
       </div>
   </div>
   <!--start join us
   <div id="join">
       <div class="container">
           <div class="row">
               <div class="col-xs-12">
                   <div class="row text-center">
                       <h2 class="title">join us</h2> </div>
                   <div class="join-content">
                       <div class="row">
                           <div class="col-lg-8 col-xs-12">
                               <h3><span>subscribe</span>to recieve all news about tiba</h3>
                               <form class="form-inline">
                                   <div class="form-group">
                                       <input type="text" class="form-control" id="exampleInputName" placeholder="Your Name"> </div>
                                   <div class="form-group">
                                       <input type="email" class="form-control" id="exampleInputEmail" placeholder="Your Mail"> </div>
                                   <button type="submit" class="btn btn-default">subscribe</button>
                               </form>
                           </div>
                           <div class="col-lg-4 col-xs-12 text-center">
                               <h3><span>send your cv</span></h3>
                               <label class="btn btn-primary" for="my-file-selector">
                                   <input id="my-file-selector" type="file" style="display:none;"> Button Text Here </label>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>-->
   <!--start news-->
   <div id="news">
       <div class="container">
           <div class="row">
               <div class="col-xs-12">
                   <div class="row text-center">
                       <h2 class="title">{{trans('home.news')}}</h2> </div>
                   <!-- EXCHANGERATES.ORG.UK LIVE CURRENCY RATES TICKER START -->
<iframe src="http://www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=auto&s=1&mc=GBP&mbg=f0f0f0&bs=yes&bc=000044&f=verdana&fs=10px&fc=000044&lc=000044&lhc=fe9a00&vc=fe9a00&vcu=008000&vcd=FF0000&" style="width:100%;height:30px;margin-bottom:30px;" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
<!-- EXCHANGERATES.ORG.UK LIVE CURRENCY RATES TICKER END -->
                @foreach($news as $one_news)
                   <div class="col-md-3 col-sm-6 col-xs-12">
                       <div class="news-details">
                         <?php
   											 $arr=json_decode($one_news->images,true);
   											?>
                           <div class="thumbnail">
                             @if(array_key_exists(0,$arr))
                             <img src="{{URL('uploads/'.$arr[0])}}" alt="img">
                             	@endif
                               <div class="caption">
                                 @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                   <h3>{{$one_news->title_ar}}</h3>
                                   <p>{{$one_news->short_desc_ar}}</p>
                                   @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                                   <h3>{{$one_news->title_en}}</h3>
                                   <p>{{$one_news->short_desc_en}}</p>
                                   @endif
                                   <p><a href='{{URL("/news/$one_news->id")}}' class="btn btn-default" role="button">{{trans('home.more')}}</a></p>
                               </div>
                           </div>
                       </div>
                   </div>
                   @endforeach

                   <div class="col-md-6 col-xs-12">
                       <div id="weather">
                       <a class="aw-widget-legal">
                           <!--
                           By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
                           -->
                       </a>
                       <div id="awtd1467479681842" class="aw-widget-36hour" data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awtd1467479681842" data-editlocation="true"> </div>
                       <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
                   </div>

               </div>

           </div>
       </div>
           <div class="row text-center"> <a href="{{route('more_news')}}" class="btn btn-default" role="button">More News</a> </div>
   </div>
   <!--start parteners
   <div id="weather">
       <div class="container">
           <div class="row">
               <div class="col-xs-12">
                   <div class="col-md-6 col-xs-12">
                       <div class="row text-center">
                           <h2 class="title">weather</h2> </div>
                       <a class="aw-widget-legal">

                       </a>
                       <div id="awtd1467479681842" class="aw-widget-36hour" data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awtd1467479681842" data-editlocation="true"> </div>
                       <script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
                   </div>
                   <div class="col-md-6 col-xs-12">
                       <div class="row text-center">
                           <h2 class="title">currency rate</h2> </div>
<iframe src="http://www.exchangerates.org.uk/widget/ER-LRTICKER.php?w=auto&s=1&mc=GBP&mbg=f0f0f0&bs=yes&bc=000044&f=verdana&fs=10px&fc=000044&lc=000044&lhc=fe9a00&vc=fe9a00&vcu=008000&vcd=FF0000&" style="width:100%;height:30px;margin-bottom:0px;" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>
                       <div id='gcw_mainFqRacW1Zb' class='gcw_mainFqRacW1Zb'></div>
                       <script>
                           function reloadFqRacW1Zb() {
                               var sc = document.getElementById('scFqRacW1Zb');
                               if (sc) sc.parentNode.removeChild(sc);
                               sc = document.createElement('script');
                               sc.type = 'text/javascript';
                               sc.charset = 'UTF-8';
                               sc.async = true;
                               sc.id = 'scFqRacW1Zb';
                               sc.src = 'http://freecurrencyrates.com/en/widget-vertical-editable?iso=USDEURGBPCNYKWDSARAEDQARXUL&df=1&p=FqRacW1Zb&v=fits&source=fcr&width=245&width_title=0&firstrowvalue=1&thm=cccccc,F9F9F9,A3A3A3,333333,eeeeee,cccccc,ffffff,222222,000000&title=Currency%20Converter&tzo=-120';
                               var div = document.getElementById('gcw_mainFqRacW1Zb');
                               div.parentNode.insertBefore(sc, div);
                           }
                           reloadFqRacW1Zb();
                       </script>
                   </div>
               </div>
           </div>
       </div>-->
   </div>
@endsection
