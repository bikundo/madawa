@extends('backend.layouts.default')
@section('title')
New prescription
@parent
@stop
@section('content')
<div class='row clearfix'>
	<div class="well col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3" id="printableArea">
		{{ Form::open(array('action' => 'PrescriptionsController@store','files'=>true)) }}
			<div class='form-group'>
				{{ Form::label('user_id', 'Patient Name') }} 
				<select class="form-control" name="user_id">
    				@foreach ($users as $user)
    				<option value="{{$user->id}}">{{$user->first_name}} {{$user->last_name}}</option>
    				@endforeach
  				</select>
			</div>
			<div class='form-group {{ $errors->first("instructions", "has-error" ) }}'>
				{{ Form::label('instructions', 'Instructions') }} 
				{{ Form::textarea('instructions', Input::old('instructions'), array('class'=>'form-control', 'rows'=>'4')) }}
				{{ $errors->first('instructions', '<span class="help-block">:message</span>') }}
			</div>
			<div class='form-group {{ $errors->first("dose", "has-error" ) }}'>
				{{ Form::label('dose', 'Dose') }} 
				{{ Form::text('dose', Input::old('dose'), array('class'=>'form-control' )) }}
				{{ $errors->first('dose', '<span class="help-block">:message</span>') }}
			</div>
			<div class="well">
			<p class="lead">choose drugs to include in prescription</p>
				@foreach ($drugs as $drug)
				<label class="checkbox-inline">
    				<input type="checkbox" name="drugs[]" value="{{$drug->id}}">{{$drug->name}}
    			</label>	
    			@endforeach
			</div>
			{{ Form::submit('Submit', array('class'=>'btn-block btn btn-primary')) }}
		{{ Form::close() }} 
	</div>
</div>
@stop