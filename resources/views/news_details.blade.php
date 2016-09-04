@extends('layouts.base')
@section('base_content')
<div id="new-details">
        <div class="row">
            <div class="col-xs-12">
                <div class="row text-center">
                    <h2 class="title">{{trans('news.details')}}</h2> </div>
                    <?php
                     $arr=json_decode($news->images,true);
                    ?>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="new-details">
                            <div class="container">
                                <div class="row">
                                <div class="col-md-4 col-xs-12"> <img src="{{URL('uploads/'.$arr[0])}}" class="img-responsive" /> </div>
                                <div class="col-md-8 col-xs-12 text-left">
                                  @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                    <h1>{{$news->title_ar}}</h1>
                                    <p class="date"><i class="fa fa-calendar"></i><span>{{date('j F, Y',strtotime($news->created_at))}}</span>
                                     </p>
                                    <p>{{$news->details_ar}}</p>
                                  @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                  <h1>{{$news->title_en}}</h1>
                                  <p class="date"><i class="fa fa-calendar"></i><span>{{date('j F, Y',strtotime($news->created_at))}}</span>
                                     <!-- &nbsp;&nbsp;&nbsp; <i class="fa fa-clock-o"></i><span>10 nov,2016</span> -->
                                   </p>
                                  <p>{{$news->details_en}}</p>
                                  @endif
                                </div>
                                </div>
                                <div class="row pic">
                                   @if(array_key_exists(1,$arr))
                                    <div class="col-md-4 col-xs-12"> <img src="{{URL('uploads/'.$arr[1])}}" class="img-responsive" /> </div>
                                    @endif
                                    @if(array_key_exists(2,$arr))
                                    <div class="col-md-4 col-xs-12"> <img src="{{URL('uploads/'.$arr[2])}}" class="img-responsive" /> </div>
                                    @endif
                                      @if(array_key_exists(3,$arr))
                                    <div class="col-md-4 col-xs-12"> <img src="{{URL('uploads/'.$arr[3])}}" class="img-responsive" /> </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
