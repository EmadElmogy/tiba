@extends('layouts.base')
@section('base_content')

<div id="product">
       <div class="row">
           <div class="col-xs-12">
               <div class="row text-center">
                   <h2 class="title">{{trans('home.cat')}}</h2>
               </div>

               <div class="row">
                   <div class="col-xs-12">
                     @foreach($cats as $cat)
                     <?php
                     $techs=\DB::table('technologies')
                           ->join('categories', 'categories.id', '=', 'technologies.cat_id')
                           ->where('technologies.cat_id','=',$cat->id)
                           ->select('categories.*', 'technologies.title_en as tech_title_en',
                           'technologies.title_ar as tech_title_ar', 'technologies.id as tech_id')
                           ->get();


                      ?>
                      @if($cat->id % 2 == 0)
                       <div class="product1">
                         @elseif($cat->id % 2 != 0)
                         <div class="product">
                           @endif
                           <div class="container">
                               <div class="col-md-4 col-xs-12">
                                   <img src="{{URL($cat->image)}}" class="img-responsive" />
                               </div>
                               <div class="col-md-8 col-xs-12 text-left">
                                 @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                   <h1>{{$cat->title_ar}}</h1>
                                   <p>{{$cat->desc_ar}}</p>
                                   <br />

                                   <div class="row">
                                     @foreach($techs as $tech)
                                       <div class="col-md-4 col-xs-12">
                                           <ul class="list-unstyled">
                                               <li><a href='{{URL("/tech/$tech->tech_id")}}'><i class="fa fa-angle-double-right"></i>{{$tech->tech_title_ar}}</a></li>
                                               <!-- <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 10</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 12</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 12</a></li> -->
                                           </ul>
                                       </div>
                                       @endforeach
                                   </div>
                                   @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                   <h1>{{$cat->title_en}}</h1>
                                   <p>{{$cat->desc_en}}</p>
                                   <br />

                                   <div class="row">

                                     @foreach($techs as $tech)
                                       <div class="col-md-4 col-xs-12">
                                           <ul class="list-unstyled">
                                               <li><a href='{{URL("/tech/$tech->tech_id")}}'><i class="fa fa-angle-double-right"></i>{{$tech->tech_title_en}}</a></li>
                                               <!-- <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 10</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 12</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 12</a></li> -->
                                           </ul>
                                       </div>
                                       @endforeach
                                   </div>
                                   @endif
                               </div>
                           </div>
                       </div>
                       @endforeach
                       <!-- <div class="product1">
                           <div class="container">
                               <div class="col-md-4 col-xs-12">
                                   <img src="img/product.png" class="img-responsive" />
                               </div>
                               <div class="col-md-8 col-xs-12 text-left">
                                   <h1>Category 2</h1>
                                   <p>IDHA is short for D,L-Aspartic acid, N-(1,2-dicarboxyethyl) tetra sodium salt complex. The IDHA chelate protects the nutrients against precipitation in a moderate pH range (pH 4 - 6.5)</p>
                                   <br />
                                   <div class="row">
                                       <div class="col-md-4 col-xs-12">
                                           <ul class="list-unstyled">
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 1</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 2</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 3</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 4</a></li>
                                           </ul>
                                       </div>
                                       <div class="col-md-4 col-xs-12">
                                           <ul class="list-unstyled">
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 5</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 6</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 7</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 8</a></li>
                                           </ul>
                                       </div>
                                       <div class="col-md-4 col-xs-12">
                                           <ul class="list-unstyled">
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 9</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 10</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 12</a></li>
                                               <li><a href="technology.html"><i class="fa fa-angle-double-right"></i>technology 12</a></li>
                                           </ul>
                                       </div>
                                   </div>
                               </div>
                           </div>
                       </div> -->

                       <div class="row">
                           {!! $cats->render() !!}
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>

@endsection
