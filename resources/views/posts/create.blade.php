@extends('main3')
@section('title','|Create New Posts')
 @section('stylesheets')

    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}

@endsection
@section('content')

<div class="row">
	<div class="col-md-8 col-md-offset-2  ">
		<h1> Create New Post</h1>
		<hr>
		{!! Form::open(array('route' => 'posts.store','data-parsley-validate' => '')) !!}
    		{{Form::label('title','Title:')}}
    		{{Form::text('title',null,array('class' => 'form-control','required' => '','maxlength'=>"255"))}}

    		{{Form::label('slug','Slug :',array('class'=>'form-spacing-top'))}}
    		{{ Form::text('slug',null,array('class'=>'form-control ','required'=>'','minlength'=>'5','maxlength'=>'255'))}}

    		{{Form::label('category_id','Category:',array('class'=>'form-spacing-top'))}}

    		<select class="form-control " name="category_id">
    			@foreach($categories as $category)
    			<option value='{{ $category->id}}'>{{ $category->name}}</option>
    			@endforeach
    		</select>

            {{Form::label('tags','Tags:',array('class'=>'form-spacing-top'))}}<small> (Hold ctrl to choose multiple tags)</small>  
            <select class="form-control select2-multi" name="tags[]" multiple="multiple">

                @foreach($tags as $tag)
                <option value='{{ $tag->id}}'>{{ $tag->name}}</option>
                @endforeach
            </select>
	

    		{{Form::label('body','Post body:',array('class'=>'form-spacing-top'))}}
    		{{Form::textarea('body',null,array('class' => 'form-control ','required' => ''))}}
    		{{Form::submit('Create Post',array('class' => 'btn btn-success btn-lg  hvr-grow','style' => 'margin-top :10px; margin-bottom:10px;'))}}
		{!! Form::close() !!}
	</div>
</div>

@endsection

@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
    </script>

@endsection