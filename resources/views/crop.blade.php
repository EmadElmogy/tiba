@extends('layouts.base')
@section('base_content')
<div id="crops">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row text-center">
                    <h2 class="title">crops</h2>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-6 col-xs-12">
                  <div class="news-details">
                    @foreach($crops as $key => $crop)
                    <?php
                     $arr=json_decode($crop->image,true);
                    ?>
                      @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                       <a href="{{ asset('/crop/'.$crop->id) }}">
                         <div class="thumbnail"> <img src="img/download.jpg" alt="img">
                           <div class="caption">
                               <h3>{{$crop->title_ar}}</h3>
                           </div>
                         </div>
                       </a>
                      @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                        <a href="{{ asset('/crop/'.$crop->id) }}">
                          <div class="thumbnail"> <img src="{{URL('uploads/'.$arr[0])}}" alt="img">
                            <div class="caption">
                              <h3>{{$crop->title_en}}</h3>
                            </div>
                          </div>
                        </a>
                      @endif
                    @endforeach
                  </div>
              </div>
          </div>
      </div>
   </div>
</div>
@endsection
