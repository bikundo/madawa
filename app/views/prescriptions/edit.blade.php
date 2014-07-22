@extends('frontend.layouts.default')
@section('content')
<div class='row clearfix'>
	<div class='col-md-12'>
		{{ HTML::ul($errors->all()) }} 
		{{ Form::open(array('url' => 'PrescriptionsController/'.@$prescription->id, 'method' =>'put', 'role'=>'form')) }} 
			<div class='form-group'>
				{{ Form::label('user_id', 'User id') }} 
				{{ Form::text('user_id', @$prescription->user_id, array('class'=>'form-control')) }}
			</div>
			<div class='form-group'>
				{{ Form::label('instructions', 'Instructions') }} 
				{{ Form::textarea('instructions', @$prescription->instructions, array('class'=>'form-control')) }}
			</div>
			<div class='form-group'>
				{{ Form::label('dose', 'Dose') }} 
				{{ Form::text('dose', @$prescription->dose, array('class'=>'form-control')) }}
			</div>
			<div class='form-group'>
				{{ Form::label('drugs', 'Drugs') }} 
				{{ Form::text('drugs', @$prescription->drugs, array('class'=>'form-control')) }}
			</div>
			<a href='{{URL::previous()}}' class='btn btn-default'>Cancel</a>
			{{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
		{{ Form::close() }} 
	</div>
</div>
@stop