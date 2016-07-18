@extends('main3')

@section('title','|View Post')

@section('content')

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
	</div>

	<div class="col-md-6 col-md-offset-2 ">
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
			 	{!! Html::linkRoute('posts.edit','Edit',array($post->id),array('class'=>'btn btn-primary btn-block hvr-grow'))!!}	
			 	</div>
			 	<div class="col-sm-4">
			 	{!! Form::open(['route'=>['posts.destroy',$post->id],'method'=>'DELETE'])!!}		

				{!!Form::submit('Delete',['class'=>'btn btn-danger btn-block hvr-grow'])!!} 	

				{!!Form::close()!!}
				</div>
				</div>
					<div class="row">
						<div class="col-md-8">
							{{ Html::linkRoute('posts.index','<< See all posts',[],['class'=>'btn btn-default btn-block btn-h1-spacing hvr-grow'])}}
						</div>
					</div>
				</div>
			 
		</div>
	</div>
</div>
@endsection