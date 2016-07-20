@extends('main3')

@section('title','| Edit Blog Post')
@section('stylesheets')

	{!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
@endsection
@section('content')

<div class="row">
<div class="col-sm-10 col-sm-offset-2"> 
{!! Form::model($post,['route' => ['posts.update',$post->id],'method'=>'PUT']) !!}
	<div class="col-md-8">
		{{ Form::label('title' ,'Title :')}}
		{{ Form::text('title',null,["class" =>'form-control input-lg'])}}

		{{ Form::label('slug','Slug',['class'=>'btn-h1-spacing']) }}
		{{ Form::text('slug',null,['class'=>'form-control']) }}

		{{ Form::label('category_id' ,'Category id :',['class'=>'btn-h1-spacing'])}}
		{{ Form::select('category_id',$categories,null,['class'=>'form-control'])}}

		{{Form::label('tags','Tags:',array('class'=>'form-spacing-top'))}}
	    {{ Form::select('tags[]',$tags,null,['class'=>'form-control select2-multi','multiple'=>'multiple'])}}
	      

		{{ Form::label('body','Body :',['class'=>'btn-h1-spacing'])}}
		{{ Form::textarea('body',null,["class" =>'form-control'])}}

	</div>
	
</div>
		<div class="row">
		<div class="col-sm-4 col-sm-offset-2" style="margin-left:350px; margin-top:20px;">		
			<div class="well">
		 	<dl class="dl-horizontal">
		 		<dt>Create At :</dt>
		 		<dd>{{ date('M j, Y H:i',strtotime($post->created_at))}}</dd>
		 	</dl>
		 	<dl class="dl-horizontal">
		 		<dt>Last Updated At :</dt>
		 		<dd>{{date('M j, Y H:i',strtotime($post->updated_at))}}</dd>
		 	</dl>
		 	<hr>
		 	<div class="row">
			 	<div class="col-sm-6">
			 	{!! Html::linkRoute('posts.show','Cancel',array($post->id),array('class'=>'btn btn-danger btn-block hvr-grow'))!!}	
			 	</div>
			 	<div class="col-sm-6">
			 	{{ Form::submit('Save Changes',['class'=>'btn btn-success btn-block hvr-grow']) }}		 	
				</div>
			 </div>
		</div>
		</div>
	</div>
{!! Form::close() !!}
</div>
@stop
@section('scripts')

	{!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $(".select2-multi").select2();
        $(".select2-multi").select2().val({!!json_encode($post->tags()->getRelatedIds())!!}).trigger('change');
    </script>

@endsection
