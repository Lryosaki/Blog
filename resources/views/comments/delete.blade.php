@extends('main3')

@section('title', '| DELETE COMMENT?')

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
			<h1>DELETE THIS COMMENT?</h1>
			<p>
				<strong>Name:</strong> {{ $comment->name }}<br>
				<strong>Email:</strong> {{ $comment->email }}<br>
				<strong>Comment:</strong> {{ $comment->comment }}
			</p>

			{{ Form::open(['route' => ['comments.destroy', $comment->id], 'method' => 'DELETE']) }}
				{{ Form::submit('DELETE ', ['class' => 'btn hvr-grow btn-danger','style'=>'margin-bottom:10px;	']) }}
			{{ Form::close() }}
		</div>
	</div>

@endsection