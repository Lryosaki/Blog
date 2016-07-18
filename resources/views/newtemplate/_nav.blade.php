<div class="col-sm-3 sidenav transbox ">
      <h4>Lryosaki's Blog</h4>
      <ul class="nav nav-pills nav-stacked">
      <li class="{{ Request::is('/') ? "active" : "" }}"><a  href="/">Acceuil</a></li>
            <li class="{{ Request::is('blog') ? "active" : "" }}"><a  href="/blog">Blog</a></li>

            <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">À propos</a></li>
            <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">Nous Contacter</a></li>
      </ul><br>

        <ul class="nav nav-pills nav-stacked ">
            @if(Auth::check())

            <li class="dropdown">
              <a href="/" class="dropdown-toggle " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{Auth::user()->name}} <span class="caret"></span></a>
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
          </ul><br>
      <div class="input-group">
        <input type="text" class="form-control" placeholder="Search Blog..">
        <span class="input-group-btn">
          <button class="btn btn-default" type="button">
            <span class="glyphicon glyphicon-search"></span>
          </button>
        </span>
      </div>
    </div>
 