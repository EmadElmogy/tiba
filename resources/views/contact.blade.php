@extends('layouts.base')
@section('base_content')
<div id="contact">
        <div class="row">
            <div class="col-xs-12">
                <div class="row text-center">
                    <h2 class="title">{{trans('home.contact')}}</h2>
                </div>
                <div class="row">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="contact">
                                <div class="container">
                                    <h3>{{trans('home.contact')}}</h3>
                                    <div class="col-md-8 col-xs-12">
                                        {!! Form::open(['route'=>'contact','files'=>'true']) !!}
                                        @if(Session::has('errors'))
                        								 <div class="row alert alert-danger">

                        										 @foreach(Session::get('errors')->all() as $error)
                        												 <div class="span6 m-wrap">
                        													{{$error}}
                        												 </div>
                        										 @endforeach

                        								 </div>
                        						 	 	@endif
                                        @if (Session::has('message'))
                                            <div class="alert alert-info">{{ Session::get('message') }}</div>
                                        @endif
                                            <div class="form-group">
                                                <label for="name">{{trans('home.name')}}</label>
                                                <input type="text" name="name" class="form-control" id="name" placeholder="{{trans('home.name')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="mail">{{trans('home.mail')}}</label>
                                                <input type="email" name="email" class="form-control" id="mail" placeholder="{{trans('home.mail')}}">
                                            </div>
                                            <div class="form-group">
                                                <label for="upload">{{trans('home.upload')}}</label>
                                                <input type="file" name="file" class="form-control" id="upload" >
                                            </div>
                                            <div class="form-group">
                                                <label for="msg">{{trans('home.message')}}</label>
                                                <textarea class="form-control" name="message" id="msg" placeholder="{{trans('home.message')}}"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-default">{{trans('home.send')}}</button>
                                        {!! Form::close() !!}
                                    </div>
                                    <div class="col-md-4 col-xs-12">
                                        <img src="img/Picture7.png" class="img-responsive" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <hr />
                    </div>
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="branches">
                                <div class="container">
                                    <div class="col-xs-12">
                                        <div class="branch">
                                            <h3>{{trans('home.technical')}}</h3>
                                            <p><b>{{trans('home.address')}} :</b></p>
                                            <p><span>{{trans('home.address_details')}}</span></p>
                                            <p><b>{{trans('home.fax')}} :</b></p>
                                            <p><span>2309650 (050) – 2309651 (050)</span></p>
                                            <p><b>{{trans('home.mobile')}} :</b></p>
                                            <p><span>01200273324</span></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">

                                        <div class="branch">
                                            <div class="overlay">
                                                <h3>{{trans('home.head')}}</h3>
                                                <p><b>{{trans('home.address')}} :</b></p>
                                                <p><span>{{trans('home.head_addr')}}</span></p>
                                                <p><b>{{trans('home.fax')}} :</b></p>
                                                <p><span> 6712333 (050) – 6712555 (050)- 6712444 (050) –  6712999  (050) - 6710111 (050)</span></p>
                                            </div>
                                            <img src="{{asset('img/Picture4.png')}}" class="img-responsive" />

                                        </div>
                                    </div>

                                    <div class="col-md-4 col-xs-12">

                                        <div class="branch">
                                            <div class="overlay">
                                                <h3>{{trans('home.s_branch')}}</h3>
                                                <p><b>{{trans('home.address')}} :</b></p>
                                                <p><span>{{trans('home.s_addr')}}</span></p>
                                                <p><b>{{trans('home.fax')}} :</b></p>
                                                <p><span> 9131246 (055) – 3202355 (055 ) – 3202255  (055 )</span></p>
                                                <p><b>{{trans('home.mobile')}} :</b></p>
                                                <p><span>01282528888</span></p>
                                            </div>
                                            <img src="{{asset('img/Picture5.png')}}" class="img-responsive" />

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">

                                        <div class="branch">
                                            <div class="overlay">
                                                <h3>{{trans('home.sinai_branch')}}</h3>
                                                <p><b>{{trans('home.address')}} :</b></p>
                                                <p><span>{{trans('home.sinai_addr')}}</span></p>
                                                <p><b>{{trans('home.fax')}} :</b></p>
                                                <p><span>3278140(064) – 3278141 ( 064)</span></p>
                                                <p><b>{{trans('home.mobile')}} :</b></p>
                                                <p><span>01064388160</span></p>
                                            </div>
                                            <img src="{{asset('img/Picture6.png')}}" class="img-responsive" />

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">

                                        <div class="branch">
                                            <div class="overlay">
                                                <h3>{{trans('home.dessert_road')}}</h3>
                                                <p><b>{{trans('home.address')}} :</b></p>
                                                <p><span>{{trans('home.dessert_addr')}}</span></p>
                                                <p><b>{{trans('home.mobile')}} :</b></p>
                                                <p><span>01277713240</span></p>
                                            </div>
                                            <img src="{{asset('img/Picture1.png')}}" class="img-responsive" />

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">

                                        <div class="branch">
                                            <div class="overlay">
                                                <h3>{{trans('home.gamasa')}}</h3>
                                                <p><b>{{trans('home.address')}} :</b></p>
                                                <p><span>{{trans('home.gamasa_addr')}}</span></p>
                                                <p><b>{{trans('home.fax')}} :</b></p>
                                                <p><span>(050) 2770185</span></p>
                                                <p><b>{{trans('home.mobile')}} :</b></p>
                                                <p><span>01281077211</span></p>
                                            </div>
                                            <img src="{{asset('img/Picture2.png')}}" class="img-responsive" />

                                        </div>
                                    </div>
                                    <div class="col-md-4 col-xs-12">

                                        <div class="branch">
                                            <div class="overlay">
                                                <h3>{{trans('home.behera')}}</h3>
                                                <p><b>{{trans('home.address')}} :</b></p>
                                                <p><span>{{trans('home.behera_addr')}}</span></p>
                                                <p><b>{{trans('home.fax')}} :</b></p>
                                                <p><span> 3752149 (045 ) – 3752148 ( 045)</span></p>
                                            </div>
                                            <img src="{{asset('img/Picture3.png')}}" class="img-responsive" />

                                        </div>
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
