@extends('main3')

@section('title','| All Posts')

@section('content')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">All Posts</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section> 
		<div class="col-md-2 col-md-offset-2">
		<a href="{{ route('posts.create') }}" class="btn btn-lg btn-block btn-primary btn-h1-spacing">Create New Post</a>
		</div>	
			<div class="col-md-12">
				<hr>
			</div>

	</div>
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<table class="table">
  				<thead>
  					<th>#</th>
  					<th>Title</th>
  					<th>Body</th>
  					<th>Created At</th>
  					<th></th>
  				</thead>
  				<tbody>
  				@foreach($posts as $post)
  					<tr>
  						<th>{{ $post->id }}</th>
  					
  					<td> {{ $post->title}}</td>
  					<td> {{ substr($post->body,0,100)}}{{ strlen($post->body) >100 ? "...":""}}</td>
  					<td> {{ date('M j, Y',strtotime($post->created_at))}}</td>

  					<td> <a href="{{ route('posts.show',$post->id)}}" class="btn btn-default btn-sm hvr-grow">View</a>
            @if(Auth::user()->name == $post->posted_by || Auth::user()->name == 'Alaa Souiba')
            <a href="{{ route('posts.edit',$post->id)}}" class="btn btn-default btn-sm hvr-grow">Edit</a>
            @endif
            </td>
  					</tr>
  				@endforeach
  				</tbody>
			</table>
      <div class="text-center">
      {!! $posts->links();!!}
      </div>
		</div>
	</div>

@endsection
