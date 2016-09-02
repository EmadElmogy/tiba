@extends('layouts.base')
@section('base_content')
<div id="new-details">
       <div class="row">
           <div class="col-xs-12">
               <div class="row text-center">
                   <h2 class="title">{{trans('news.details')}}</h2>

               </div>
               <div class="row">
                   <div class="col-xs-12">
                      @foreach($news as $one_news)

                       <div class="new-details">
                           <div class="container">
                             <?php
                              $arr=json_decode($one_news->images,true);
                             ?>
                               <div class="col-md-4 col-xs-12">
                                   <img src="{{URL('uploads/'.$arr[0])}}" class="img-responsive" />
                               </div>
                               <div class="col-md-8 col-xs-12 text-left">
                                 @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                   <h1>{{$one_news->title_ar}}</h1>
                                   <p class="date"><i class="fa fa-calendar"></i><span>{{date('j F, Y',strtotime($one_news->created_at))}}</span>
                                    </p>
                                   <p>{{$one_news->details_ar}}</p>
                                 @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                 <h1>{{$one_news->title_en}}</h1>
                                 <p class="date"><i class="fa fa-calendar"></i><span>{{date('j F, Y',strtotime($one_news->created_at))}}</span>
                                    <!-- &nbsp;&nbsp;&nbsp; <i class="fa fa-clock-o"></i><span>10 nov,2016</span> -->
                                  </p>
                                 <p>{{$one_news->details_en}}</p>
                                   <a href="new-details.html" class="btn btn-default pull-right" role="button">More </a>
                               </div>
                           </div>
                       </div>
                       @endforeach

                       <div class="row">
                           <!-- <nav>
                               <ul class="pagination">
                                   <li>
                                       <a href="#" aria-label="Previous">
                                           <span aria-hidden="true">&laquo;</span>
                                       </a>
                                   </li>
                                   <li class="active"><a href="#">1</a></li>
                                   <li><a href="#">2</a></li>
                                   <li><a href="#">3</a></li>
                                   <li><a href="#">4</a></li>
                                   <li><a href="#">5</a></li>
                                   <li>
                                       <a href="#" aria-label="Next">
                                           <span aria-hidden="true">&raquo;</span>
                                       </a>
                                   </li>
                               </ul>
                           </nav> -->
                           {!! $news->render() !!}
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   @endsection
