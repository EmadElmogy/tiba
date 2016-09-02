<!--start menu-->
    <div id="menu">
        <nav class="navbar navbar-default">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                    <a class="navbar-brand smoothscroll" href="#header"><img src="{{asset('img/logo.png')}}" /></a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                      @if($page_flag == 'outer')
                        <li><a href="#header" class="smoothscroll">{{trans('home.home')}}</a></li>
                        <li><a href="#about" class="smoothscroll">{{trans('home.about')}}</a></li>
                        <li><a href="{{URL('/categories')}}">{{trans('home.products')}}</a></li>
                        <li><a href="#partener" class="smoothscroll">{{trans('home.partners')}}</a></li>
                        <li><a href="#service" class="smoothscroll">{{trans('home.service')}}</a></li>
                        <li><a href="#news" class="smoothscroll">{{trans('home.news')}}</a></li>
                        @elseif($page_flag == 'inner')
                          <li><a href="{{URL('/')}}">{{trans('home.back')}}</a></li>
                        @endif
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
        </nav>
    </div>
