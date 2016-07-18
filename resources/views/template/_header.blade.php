<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a href=""><i class="fa fa-facebook"></i></a></li>
                            <li><a href=""><i class="fa fa-twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-google-plus"></i></a></li>
                            <li><a href=""><i class="fa fa-dribbble"></i></a></li>
                            <li><a href=""><i class="fa fa-linkedin "></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="/">
                        <h1><img src="{{url('images/logo.png')}}" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">Home</a></li>                  
                        <li class="dropdown  {{ Request::is('blog') ? "active" : "" }}"><a href="/blog">Blog </a>
                        </li>
                        <li class="dropdown {{ Request::is('about') ? "active" : "" }}"><a href="/about">About us</a>
                        </li>                         
                        <li  class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Contact us</a></li>   
                        @if(Auth::check())

                            <li class="dropdown active">
                              <a href="/" >{{Auth::user()->name}} <span class="caret"></span></a>
                              <ul role="menu" class="sub-menu">
                                <li><a href="{{route('posts.index')}}">Posts</a></li>
                                <li><a href="{{route('categories.index')}}">Categories</a></li>
                                <li><a href="{{route('tags.index')}}">Tags</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{ route('logout')}}">Déconnexion</a></li>

                              </ul>
                            </li>

                            @else

                             <li> <a href="{{route('login')}}" > Connexion</a></li>
                             <li> <a href="{{route('register')}}" >S'inscrire</a></li>   


                            @endif
                                  
                    </ul>
                </div>
                <div class="search">
                    <form role="form">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" placeholder="Search">
                        </div>
                    </form>
                </div>
            </div>
        </div>