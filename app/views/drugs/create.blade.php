@extends('backend.layouts.default')

@section('title')
Add New Drug
@parent
@stop
@section('content')
<div class='row clearfix'>
	<div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" id="printableArea">
		{{ Form::open(array('action' => 'DrugsController@store','files'=>true)) }}
			<div class='form-group {{ $errors->first("name", "has-error" ) }}'>
				{{ Form::label('name', 'Name') }} 
				{{ Form::text('name', Input::old('name'), array('class'=>'form-control')) }}
				{{ $errors->first('name', '<span class="help-block">:message</span>') }}
			</div>
			<div class='form-group {{ $errors->first("description", "has-error" ) }}' >
				{{ Form::label('description', 'Description') }} 
				{{ Form::text('description', Input::old('description'), array('class'=>'form-control')) }}
				{{ $errors->first('description', '<span class="help-block">:message</span>') }}
			</div>
			<div class='form-group {{ $errors->first("dosage", "has-error" ) }}'>
				{{ Form::label('dosage', 'Recommended Dose') }} 
				{{ Form::text('dosage', Input::old('dosage'), array('class'=>'form-control')) }}
				{{ $errors->first('dosage', '<span class="help-block">:message</span>') }}
			</div>
			<div class='form-group {{ $errors->first("ammount", "has-error" ) }}'>
				{{ Form::label('ammount', 'Amount') }} 
				{{ Form::text('ammount', Input::old('ammount'), array('class'=>'form-control')) }}
				{{ $errors->first('ammount', '<span class="help-block">:message</span>') }}
			</div>
			{{ Form::submit('Submit', array('class'=>'btn btn-block btn-primary')) }}
		{{ Form::close() }} 
	</div>
</div>
@stop