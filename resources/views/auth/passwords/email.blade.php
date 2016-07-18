@extends('main3')
@section('title','|Forget my password')
@section('content')

	<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Mot de passe oublier</h1>
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
				@if(session('status'))
					<div class="alert alert-success">
					{{session('status')}}		
					</div>
				@endif
					{!!Form::open(['url'=>'password/email','methid'=>'POST'])!!}
						{{Form::label('email','Email Address :')}}
						{{Form::email('email',null,['class'=>'form-control'])}}
						{{Form::submit('Reset Password',['class'=>'btn btn-primary hvr-grow btn-top-spacing '])}}

					{!!Form::close()!!}
				</div>
			</div>
		</div>
	</div>

@stop