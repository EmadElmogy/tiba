<footer>
       <div class="container">
           <div class="row">
               <div class="col-xs-12">
                   <div class="col-md-6 col-xs-12">
                       <div id="join">
                           <div class="join-content">
                               <h3><span>{{trans('home.subscribe')}}</span>{{trans('home.subscribe_2')}}</h3>
                                 {!! Form::open(['route'=>'subscribe','class'=>'form']) !!}
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
                                       <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="{{trans('home.name')}}"> </div>
                                   <div class="form-group">
                                       <input type="email" class="form-control" name="email" id="exampleInputEmail" placeholder="{{trans('home.mail')}}"> </div>
                                   <button type="submit" class="btn btn-default">{{trans('home.subscribe')}}</button>
                               {!! Form::close() !!}
                           </div>
                       </div>
                   </div>
                   <div class="col-md-6 col-xs-12">
                       <div class="row"> <img src="{{asset('img/logo1.png')}}" /> </div>
                       <div class="row social">
                         <a href="https://www.facebook.com/TIBA2002/"><i class="fa fa-facebook"></i></a>
                         <a href="https://twitter.com/TibaEgypt "><i class="fa fa-twitter"></i></a>
                         <a href="https://www.youtube.com/channel/UCU5ed8dVeQTbsnHG53N-W1A"><i class="fa fa-youtube"></i></a>
                         <a href="#"><i class="fa fa-google-plus"></i></a>
                         <a href="https://eg.linkedin.com/in/tibafortrading"><i class="fa fa-linkedin"></i></a> </div>
                       <div class="row">
                           <ul class="list-unstyled">
                               <li><a href="#about">{{trans('home.about')}}</a></li>
                               <li><a href="career.html">{{trans('home.career')}}</a></li>
                               <li><a href="{{URL('/contact')}}">{{trans('home.contact')}}</a></li>
                           </ul>
                       </div>
                   </div>
                   <div class="col-xs-12">
                       <hr />
                       <div class="row">
                           <p>copyrights &copy; right reserved <a href="#">milestone apps</a></p>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </footer>
   <script src="{{asset('js/main.js')}}"></script>
   <script src="{{asset('js/jquery.nicescroll.js')}}"></script>
   <script src="{{asset('js/owl.carousel.js')}}"></script>
   <script>
       $(document).ready(function () {
           var owl = $('.owl-carousel');
           owl.owlCarousel({
               items: 6
               , loop: true
               , margin: 40
               , autoplay: true
               , autoplayTimeout: 2000
               , autoplayHoverPause: true
               , responsive: {
                   0: {
                       items: 2
                   }
                   , 600: {
                       items: 4
                   }
                   , 1000: {
                       items: 6
                   }
               }
           });
       });
   </script>
</body>

</html>
