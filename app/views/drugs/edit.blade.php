@extends('backend.layouts.default')
@section('content')
<div class='row clearfix'>
	<div class='col-md-12'>
		{{ HTML::ul($errors->all()) }} 
		{{ Form::model($drug, array('route' => array('admin.drugs.update', $drug->id), 'method' => 'PUT')) }}
			<div class='form-group'>
				{{ Form::label('name', 'Name') }} 
				{{ Form::text('name', @$drug->name, array('class'=>'form-control')) }}
			</div>
			<div class='form-group'>
				{{ Form::label('description', 'Description') }} 
				{{ Form::text('description', @$drug->description, array('class'=>'form-control')) }}
			</div>
			<div class='form-group'>
				{{ Form::label('dosage', 'Dosage') }} 
				{{ Form::text('dosage', @$drug->dosage, array('class'=>'form-control')) }}
			</div>
			<div class='form-group'>
				{{ Form::label('ammount', 'Amount') }} 
				{{ Form::text('ammount', @$drug->ammount, array('class'=>'form-control')) }}
			</div>
			<a href='{{URL::previous()}}' class='btn btn-default'>Cancel</a>
			{{ Form::submit('Submit', array('class'=>'btn btn-primary')) }}
		{{ Form::close() }} 
	</div>
</div>
@stop