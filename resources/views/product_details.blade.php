@extends('layouts.base')
@section('base_content')

<div id="product">
       <div class="row">
           <div class="col-xs-12">
               <div class="row text-center">
                   <h2 class="title">{{trans('home.p_details')}}</h2>
               </div>
               <?php
                $arr=json_decode($product->image,true);
               ?>
               <div class="row">
                   <div class="col-xs-12">
                       <div class="product">
                           <div class="container">
                               <div class="col-md-4 col-xs-12">
                                   <img src="{{URL('uploads/'.$arr[0])}}" class="img-responsive" />
                               </div>
                               <div class="col-md-8 col-xs-12 text-left">
                                 @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                   <h1>{{$product->title_ar}}</h1>
                                   <p>{{$product->desc_ar}}</p>
                                   @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                                   <h1>{{$product->title_en}}</h1>
                                   <p>{{$product->desc_en}}</p>
                                   @endif
                                   <br />
                                   <?php $arr_files=json_decode($product->attached_files,true); ?>
                                   <div class="pull-right">
                                       <a href="{{URL('uploads/'.$arr_files[0])}}" download>
                                       <button class="btn btn-default"><i class="fa fa-link"></i>TDS</button>
                                   </a>
                                   <a href="{{URL('uploads/'.$arr_files[1])}}" download>
                                       <button class="btn btn-default"><i class="fa fa-link"></i>Brochurs</button>
                                   </a>
                                   </div>
                               </div>
                               <div class="pic">
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
