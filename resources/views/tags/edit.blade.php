@extends('main3')

@section('title','| Edit Tag')

@section('content')

	<div class="col-md-6 col-md-offset-2  ">

	{{Form::model($tag,['route'=>['tags.update',$tag->id] ,'method'=>'PUT'])}}

		{{Form::label('name','Title :')}}
		{{Form::text('name',null,['class'=>'form-control'])}}
		{{Form::submit('Save Changes',['class'=>'btn btn-success btn-top-spacing hvr-grow image'])}}
		
	{{Form::close()}}
	</div>
@endsection