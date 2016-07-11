@extends('main')

@section('title','| Homepage')

@section('content')
      <div class="row">
        <div class="col-md-12">
          <div class="jumbotron">
            <h1>Welcome to My Blog!</h1>


            <p class="lead">Thank you so much for visiting. This is my test website built with Laravel. Please read my popular post!</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Popular Post</a></p>
          </div>
        </div>
      </div>
      <!-- end of header .row -->

      <div class="row">
        <div class="col-md-8 ">

        @foreach($posts as $post)
            <div class="post">
              <h3>{{$post->title}}</h3>
              <p>{{ substr($post->body,0,300)}}{{ strlen($post->body) >300 ? "...":""}}</p>
              <a href="{{ url('blog/'.$post->slug)}}" class="btn btn-primary btn-h1-spacing ">Read More</a>
            </div>

          <hr>

          @endforeach
        </div>
        <div class="col-md-2 col-md-offset-1 ">
          <h2>Tags</h2>
            @foreach($tags as $tag)

                <spam class="label label-default">{{$tag->name}}</spam>

            @endforeach
            <hr>
            <h2>Follow us</h2>
        </div>
      </div>

@endsection
   