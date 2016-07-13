   <!-- Default Bootstrap Navbar -->
    <nav class="navbar navbar-light bg-faded">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/"><img class="image img-rounded""  src="{{url('css/images/bloginy.png')}}"></a>
          
        </div>
        <div class="menu-top-spacing">
        <form method="post" action"TagController.php" class="navbar-form navbar-left " role="search">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Search">
          </div>
        </form>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav menu-top-spacing ">
            <li class="{{ Request::is('/') ? "active" : "" }}"><a  href="/">Acceuil</a></li>
            <li class="{{ Request::is('blog') ? "active" : "" }}"><a  href="/blog">Blog</a></li>

            <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">À propos</a></li>
            <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Nous Contacter</a></li>
          </ul>


          <ul class="nav navbar-nav navbar-right">
            @if(Auth::check())

            <li class="dropdown">
              <a href="/" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{route('posts.index')}}">Posts</a></li>
                <li><a href="{{route('categories.index')}}">Categories</a></li>
                <li><a href="{{route('tags.index')}}">Tags</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ route('logout')}}">Déconnexion</a></li>

              </ul>
            </li>

            @else

            <a href="{{ route('login') }}" class="btn btn-default btn-top-spacing hvr-grow " style="margin-right:5px;">Connexion</a>
            <a href="{{ route('register') }}" class="btn btn-default btn-top-spacing hvr-grow ">S'inscrire</a>


            @endif
          </ul>

        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>