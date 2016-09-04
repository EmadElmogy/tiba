@extends('layouts.base')
@section('base_content')
<div id="crop-details">
    <div class="row">
        <div class="col-xs-12">
            <div class="row text-center">
                <h2 class="title">crop-details</h2> </div>
            <div class="row">
                <div class="col-xs-12">
                    <div class="crop-details">
                        <div class="container">
                            <div class="row">
                            <div class="col-md-4 col-xs-12"> <img src="{{ asset('/'.$solution->image) }}" class="img-responsive" /> </div>
                            <div class="col-md-8 col-xs-12 text-left">
                              @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                                <h1>{{$solution->title_ar}}</h1>
                                <p>{{ $solution->desc_ar }}</p>
                              @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                                <h1>{{$solution->title_en}}</h1>
                                <p>{{ $solution->desc_en }}</p>
                              @endif
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
