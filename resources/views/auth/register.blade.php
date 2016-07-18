@extends('main3')
@section('title','| Register')
@section('content')

<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Inscription</h1>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>

<div class="row">
	<div class="col-md-6 col-md-offset-3">
		{!!Form::open()!!}
				{{Form::label('name','Name')}}
				{{Form::text('name',null,['class'=>'form-control'])}}
				{{Form::label('email','Email')}}
				{{Form::email('email',null,['class'=>'form-control'])}}
				{{Form::label('password','Password')}}
				{{Form::password('password',['class'=>'form-control'])}}
				{{Form::label('password_confirmation','Confirm password')}}
				{{Form::password('password_confirmation',['class'=>'form-control'])}}
				{{Form::submit('Register',['class'=>'btn btn-primary hvr-grow btn-h1-spacing btn-bot-spacing'])}}

		{!!Form::close()!!}

	</div>
</div>
@stop


