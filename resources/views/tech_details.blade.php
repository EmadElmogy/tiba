@extends('layouts.base')
@section('base_content')

<div id="product">
        <div class="row">
            <div class="col-xs-12">
                <div class="row text-center">
                    <h2 class="title">{{trans('home.technologies')}}</h2>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="product">
                            <div class="container">
                                <div class="col-md-4 col-xs-12">
                                    <img src="{{URL($techs->image)}}" class="img-responsive" />
                                </div>
                                <div class="col-md-8 col-xs-12 text-left">
                                  @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                    <h1>{{$techs->title_ar}}</h1>
                                    <p>{{$techs->desc_ar}}</p>
                                    @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                    <h1>{{$techs->title_en}}</h1>
                                    <p>{{$techs->desc_en}}</p>
                                    @endif
                                    <br />

                                    <div class="row">
                                      @foreach($products as $product)
                                        <div class="col-md-4 col-xs-12">
                                            <ul class="list-unstyled">
                                              @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                                <li><a href='{{URL("/product/$product->id")}}'><i class="fa fa-angle-double-right"></i>{{$product->title_ar}}</a></li>
                                                @elseif(Config::get('languages')[App::getLocale()] == 'English')
                                                  <li><a href='{{URL("/product/$product->id")}}'><i class="fa fa-angle-double-right"></i>{{$product->title_en}}</a></li>
                                                @endif
                                            </ul>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
