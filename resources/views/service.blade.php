@extends('layouts.base')
@section('base_content')
<!--start service-->
<div id="service">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="row text-center">
                    <h2 class="title">services</h2>
                </div>
                @foreach($services as $key => $service)
                <div class="col-sm-6 col-xs-12">
                  <div class="service-details">
                    <div class="row">
                      <div class="col-md-6 col-xs-12"> <img src="img/download.jpg" alt="img1" class="img-responsive"> </div>
                      <div class="col-md-6 col-xs-12">
                        @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                        <h1>{{$service->title_ar}}</h1>
                        <p>{{ $service->desc_ar }}</p>
                        @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                        <h1>{{$service->title_en}}</h1>
                        <p>{{ $service->desc_en }}</p>
                        @endif
                        <a href="{{ asset('/'.$service->title_en) }}" class="btn btn-default">more</a> </div>
                      </div>
                    </div>
                  </div>
                @endforeach
                <div class="row">
                    <nav class="text-center">
                        <ul class="pagination">
                          {{ $services->links() }}
                            {{-- <li>
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
                            </li> --}}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
