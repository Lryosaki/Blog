@extends('main3')
@section('title','| Login')
@section('content')


	<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="action">
                        <div class="col-sm-12">
                            <h1 class="title">Authentification</h1>
                            
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
</div>


      <div class="row">
  <div class="col-md-6 col-md-offset-3">
  {!!Form::open()!!}
    {{Form::label('email','Email')}}
    {{Form::email('email',null,['class'=>'form-control'])}}
    {{Form::label('password','Password')}}
    {{Form::password('password',['class'=>'form-control'])}}
    <br>
    {{Form::checkbox('remember')}}  {{Form::label('remember','Remember Me')}}
    <br>
    {{Form::submit('Login',['class'=>'btn btn-primary hvr-grow'])}}

    <p class="btn-top-spacing"><a href="{{url('password/reset')}}" >Forgot Password</a></p>
  {!!Form::close()!!}
  </div>
  
</div>
@stop