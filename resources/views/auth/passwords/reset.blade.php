@extends('main')
@section('title','|Forgetmy password')
@section('content')
	
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<div class="panel panel-default">
				<div class="panel-heading">
					Reset Password
				</div>
				<div class="panel-body">
					{!!Form::open(['url'=>'password/reset','methid'=>'POST'])!!}
						{{Form::hidden('token',$token)}}
						{{Form::label('email','Email Address :')}}
						{{Form::email('email',$email,['class'=>'form-control'])}}
						{{Form::label('password','New password :')}}
						{{Form::password('password',['class'=>'form-control'])}}
						{{Form::label('password_confirmation','Confirm new password :')}}
						{{Form::password('password_confirmation',['class'=>'form-control'])}}
						{{Form::submit('Reset Password',['class'=>'btn btn-primary hvr-grow btn-top-spacing '])}}

					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>

@stop