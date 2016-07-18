@extends('main2')

@section('title','| Homepage')

@section('content')

    <div class="col-sm-9">
      <div class="jumbotron back btn-h1-spacing">
            <h2>Bloginy vous souhaite la bienvenue</h2>
            <p class="lead">Proposer un sujet a discuter,crée votre catégorie et des tags spécials</p>
            <p><a class="btn btn- btn-lg hvr-underline-from-left text-btn"  href="/blog" role="button">Dérniers blogs</a></p>
      </div>
      <hr>

      @foreach($posts as $post)
      <h2>{{$post->title}}</h2>
      <h5><span class="glyphicon glyphicon-time"></span> {{$post->created_at}}</h5>
         

      <p>{{ substr($post->body,0,800)}}{{ strlen($post->body) >800 ? "...":""}}</p>
    
                    <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-primary btn-h1-spacing  hvr-pop">Read More</a>

      @endforeach

      <hr>

      <h4>Leave a Comment:</h4>
      <form role="form">
        <div class="form-group">
          <textarea class="form-control" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
      </form>
      <br><br>
      
      <p><span class="badge">2</span> Comments:</p><br>
      
      <div class="row">
        <div class="col-sm-2 text-center">
          <img src="bandmember.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>Anja <small>Sep 29, 2015, 9:12 PM</small></h4>
          <p>Keep up the GREAT work! I am cheering for you!! Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
        </div>
        <div class="col-sm-2 text-center">
          <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
        </div>
        <div class="col-sm-10">
          <h4>John Row <small>Sep 25, 2015, 8:25 PM</small></h4>
          <p>I am so happy for you man! Finally. I am looking forward to read about your trendy life. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
          <br>
          <p><span class="badge">1</span> Comment:</p><br>
          <div class="row">
            <div class="col-sm-2 text-center">
              <img src="bird.jpg" class="img-circle" height="65" width="65" alt="Avatar">
            </div>
            <div class="col-xs-10">
              <h4>Nested Bro <small>Sep 25, 2015, 8:28 PM</small></h4>
              <p>Me too! WOW!</p>
              <br>
            </div>
          </div>
        </div>
      </div>
    </div>




@endsection
