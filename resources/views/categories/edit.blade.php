@extends('main3')

@section('title','| Edit Category')

@section('content')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Edit category</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
    </section> 
	<div class="col-md-6 col-md-offset-2  ">

	{{Form::model($category,['route'=>['categories.update',$category->id] ,'method'=>'PUT'])}}

		{{Form::label('name','Title :')}}
		{{Form::text('name',null,['class'=>'form-control'])}}
		{{Form::submit('Save Changes',['class'=>'btn btn-success btn-top-spacing hvr-grow image'])}}
		
	{{Form::close()}}
	</div>
@endsection