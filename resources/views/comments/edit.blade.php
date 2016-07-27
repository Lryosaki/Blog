@extends('main3')

@section('title','| Edit comment')*

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
		<div class="col-md-8 col-md-offset-2">
			<h1>Edit Comment</h1>
			
			{{ Form::model($comment, ['route' => ['comments.update', $comment->id], 'method' => 'PUT']) }}
			
				{{ Form::label('name', 'Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control', 'disabled' => '']) }}
			
				{{ Form::label('email', 'Email:') }}
				{{ Form::text('email', null, ['class' => 'form-control', 'disabled' => '']) }}
			
				{{ Form::label('comment', 'Comment:') }}
				{{ Form::textarea('comment', null, ['class' => 'form-control']) }}
			
				{{ Form::submit('Update Comment', ['class' => 'btn  btn-success hvr-grow', 'style' => 'margin-top: 10px;']) }}
			
			{{ Form::close() }}
		</div>
	</div>


@endsection
