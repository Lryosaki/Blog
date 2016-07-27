@extends('main3')

@section('title','|View Post')

@section('content')


<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title"></h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section> 
<div class="row">
	<div class="col-md-8  col-md-offset-2 form-spacing-top">
	{{Form::label('title','Title:')}}
	<h1 class='btn-spacing-top'> {{ $post->title }}</h1>
	<hr>
	{{Form::label('body','Post body:')}}
	<p class="lead btn-spacing-top">{{ $post->body }}</p>
	<hr>
		<div class="tags">
		@foreach($post->tags as $tag)
			<spam class="label label-default">{{ $tag->name }}</spam>
		
		@endforeach
		</div>
		<div id="backend-comments" style="margin-top:60px;">
			<h3>Comments <small>{{$post->comments()->count()}} total</small></h3>
			<table class="table">
			<thead>
				<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Comment</th>
				<th>/</th>
				</tr>
			</thead>
			<tbody>
				@foreach($post->comments as $comment)
				<tr>
					<td>{{$comment->name}}</td>
					<td>{{$comment->email}}</td>
					<td>{{$comment->comment}}</td>
					@if(Auth::user()->name == $comment->name || Auth::user()->name == 'Alaa Souiba')

					<td> <a href="{{ route('comments.edit', $comment->id) }}" class="btn btn-sm btn-primary hvr-grow" style="margin-right:5px;">Edit</a>
					<a href="{{ route('comments.delete', $comment->id) }}" class="btn btn-sm btn-danger hvr-grow">Delete</a>
					@endif
					</td>
				</tr>
				@endforeach
			</tbody>
			</table>
		</div>
	</div>

	<div class="col-md-4  col-md-offset-2 " style="margin-top:10px;">
		<div class="well col-md-offset-2 ">
			<dl class="dl-horizontal">
		 		<label>Url :</label>
		 		<p><a href="{{ route('blog.single',$post->slug) }}">{{ route('blog.single',$post->slug) }}</a></p>
		 	</dl>
		 	<dl class="dl-horizontal">
		 		<label>Category :</label>
		 		<p>{{ $post->category->name }}</p>
		 	</dl>
		 	<dl class="dl-horizontal btn-h1-spacing">
		 		<label>Create At :</label>
		 		<p>{{ date('M j, Y H:i',strtotime($post->created_at))}}</p>
		 	</dl>
		 	<dl class="dl-horizontal btn-h1-spacing">
		 		<label>Last Updated At :</label>
		 		<p>{{date('M j, Y H:i',strtotime($post->updated_at))}}</p>
		 	</dl>
		 	<hr>
		 	<div class="row">
			 	<div class="col-sm-4 ">
			 	@if(Auth::user()->name == $post->posted_by || Auth::user()->name == 'Alaa Souiba')
			 	{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block hvr-grow'))!!}	
			 	</div>
			 	<div class="col-sm-4">
			 	{!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])!!}		

				{!!Form::submit('Delete',['class'=>'btn btn-danger btn-block hvr-grow'])!!} 	
				@endif
				{!!Form::close()!!}
				</div>
				</div>
					<div class="row">
						<div class="col-md-8">
							{{ Html::linkRoute('posts.index','<< See all posts',[],['class'=>'btn btn-default btn-block btn-h1-spacing hvr-float-shadow'])}}
						</div>
					</div>
				</div>
			 
		</div>
	</div>
</div>
@endsection