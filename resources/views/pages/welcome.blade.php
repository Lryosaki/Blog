@extends('main')

@section('title','| Homepage')

@section('content')
         <!-- <a style="display:scroll;position:fixed; bottom:5px; left:5px; size:15px; "  href="#" title="Retour haut de page"><img src="css/images/top.png"/></a> -->

      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron back">
            <h2>Bloginy vous souhaite la bienvenue</h2>
            <p class="lead">Proposer un sujet a discuter,crée votre catégorie et des tags spécials</p>
            <p><a class="btn btn- btn-lg hvr-underline-from-left text-btn"  href="/blog" role="button">Dérniers blogs</a></p>
          </div>
        </div>
      </div>
      <!-- end of header .row -->

      <div class="row">
        <div class="col-md-8 ">

        @foreach($posts as $post)
            <div class="post">
              <h3>{{$post->title}}</h3>
              <p>{{ substr($post->body,0,800)}}{{ strlen($post->body) >800 ? "...":""}}</p>
              <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-primary btn-h1-spacing  hvr-pop">Read More</a>
            </div>

          <hr>

          @endforeach
        </div>
        <div class="col-md-3 col-md-offset-1 ">
  
          <h2>Tags</h2>
            @foreach($tags as $tag)

                <spam class="label label-default">{{$tag->name}}</spam>

            @endforeach

            <hr>
            <h2>Catégories</h2>
            @foreach($categories as $cat)

                <spam class="label label-default">{{$cat->name}}</spam>

            @endforeach
            <hr>
            <h2>Follow us</h2>
              <div class="fb-icon-bg"></div>
                <div class="fb-bg"></div>
              <div class="twi-icon-bg"></div>
                <div class="twi-bg"></div>
              <div class="g-icon-bg"></div>
                <div class="g-bg"></div>
                      
        </div>
      </div>



@endsection
   