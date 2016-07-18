@extends('main3')

@section('title',"| $tag->name ")

@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-2 ">
		<h1>{{ $tag->name }} Tag <small>{{ $tag->posts()->count() }} Posts</small></h1>
	</div>
	<div class="col-md-2 	">
		<a href="{{ route('tags.edit', $tag->id)}}" class="btn btn-primary btn-block pull-right btn-h2-spacing hvr-grow">Edit</a>

		{{ Form::open(['route' => ['tags.destroy', $tag->id], 'method' => 'DELETE']) }}
				{{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block btn-h1-spacing  hvr-grow']) }}
		{{ Form::close() }}

		

	{{ Html::linkRoute('tags.index','<< See all tags',[],['class'=>'btn btn-default btn-block btn-h1-spacing hvr-grow'])}}
	</div>
	
	
					
</div>
<div class="row">
	<div class="col-md-6 col-md-offset-2 ">
		<table class="table table-striped">
			<thead>
				<tr>
					<th>#</th>
					<th>Title</th>
					<th>Tags</th>
					<th></th>
				</tr>
			</thead>
			<tbody > 
			@foreach($tag->posts as $post)
				<tr>
					<th> {{$post->id}}</th>
					<td> {{$post->title}}</td>
					<td> 
					@foreach($post->tags as $tag)
						<spam class="label label-default">{{$tag->name}}</spam>
					@endforeach
					</td>
					<td>
					<a href="{{route('posts.show',$post->id)}}" class="btn btn-default btn-sm pull-right hvr-grow">View</a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
</div>
@stop