@extends('layouts.base')
@section('base_content')
<!--start converter-->
<div id="search">
    <div class="row">
        <div class="col-xs-12">
            <div class="row text-center">
                <h2 class="title">search result</h2> </div>
            <div class="row">
                <div class="col-xs-12">
                  @foreach($results as $key=> $array)
                    @foreach($array as $result)
                      @if( Config::get('languages')[App::getLocale()] == 'Arabic' )
                        <div class="panel panel-success">
                          <div class="panel-heading"> <b><i class="fa fa-search"></i>
                            نتيجه البحث
                            </b> <b class="pull-right">
                              <a href="{{ asset('/'.$key.'/'.$result->id) }}">
                                <span>تفاصيل اكتر</span><i class="fa fa-angle-double-right"></i>
                              </a>
                            </b>
                          </div>
                          <div class="panel-body">
                            <p>{{ $result->desc_ar }}</p>
                          </div>
                        </div>
                      @elseif( Config::get('languages')[App::getLocale()] == 'English' )
                        <div class="panel panel-success">
                          <div class="panel-heading"> <b><i class="fa fa-search"></i>
                            search result
                            </b> <b class="pull-right">
                              <a href="{{ asset('/'.$key.'/'.$result->id) }}">
                                <span>more details</span><i class="fa fa-angle-double-right"></i>
                              </a>
                            </b>
                          </div>
                          <div class="panel-body">
                            <p>{{ $result->desc_en }}</p>
                          </div>
                        </div>
                      @endif
                    @endforeach
                  @endforeach
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <nav class="text-center">
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
        </nav>
    </div>
</div>
@endsection
