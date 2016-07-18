@extends('main3')
@section('title','|Forgetmy password')
@section('content')
	
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Changement de mot de passe</h1>
                        </div>                                                                                
                    </div>
                </div>
            </div>
        </div>
    </section>


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