@extends('main')

@section('title','| Edit Tag')

@section('content')
	
	{{Form::model($tag,['route'=>['tags.update',$tag->id] ,'method'=>'PUT'])}}

		{{Form::label('name','Title :')}}
		{{Form::text('name',null,['class'=>'form-control'])}}
		{{Form::submit('Save Changes',['class'=>'btn btn-success btn-top-spacing hvr-grow'])}}
		
	{{Form::close()}}
@endsection