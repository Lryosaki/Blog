@extends('main3')
@section('title','| All Categories')
@section('content')

<div class="row">
	<div class="col-md-6 col-md-offset-2  ">
		<h1> Categories</h1>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Name</th>

				</tr>
			</thead>
			<tbody>
			@foreach ($categories as $categorie)
				<tr>
					<th>{{$categorie->id}}</th>
					<td>{{$categorie->name}}</td>
				</tr>
			@endforeach
			</tbody>
		</table>
	</div>
	<div class="col-md-3">
		<div class="well">
			{!! Form::open(['route'=>'categories.store','method'=>'post']) !!}
				<h2> New Category</h2>
				{!! Form::label('name','Name :')!!}
				{!! Form::text('name',null,['class'=>'form-control']) !!}
				{!! Form::submit('Create new category',['class'=>'btn btn-success btn-block hvr-grow btn-top-spacing'])!!}
			{!! Form::close() !!}
		</div>
	</div>

</div>



@stop
