@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Account Sign up ::
@parent
@stop

{{-- Page content --}}
@section('content')

<div class="row">
	<form method="post" action="{{ route('signup') }}" class="col-md-6 inputforms col-md-offset-3" autocomplete="off">
	<div class="page-header">
	<h3 class="text-center">Sign up</h3>
</div>
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />

		<!-- First Name -->
		<div class="form-group{{ $errors->first('first_name', ' has-error') }}">
				<input placeholder="First Name" type="text" name="first_name" class="form-control" id="first_name" value="{{ Input::old('first_name') }}" />
				{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
		</div>

		<!-- Last Name -->
		<div class="form-group{{ $errors->first('last_name', ' has-error') }}">
				<input placeholder="Last Name" type="text" class="form-control" name="last_name" id="last_name" value="{{ Input::old('last_name') }}" />
				{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
		</div>

		<!-- Email -->
		<div class="form-group{{ $errors->first('email', ' has-error') }}">
				<input required placeholder=" Your Email Adress" class="form-control" type="text" name="email" id="email" value="{{ Input::old('email') }}" />
				{{ $errors->first('email', '<span class="help-block">:message</span>') }}
		</div>

		<!-- 
		<div class="form-group{{ $errors->first('email_confirm', ' error') }}">
				<input placeholder="Email confirmation" class="form-control" type="text" name="email_confirm" id="email_confirm" value="{{ Input::old('email_confirm') }}" />
				{{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
		</div> -->

		<!-- Password -->
		<div class="form-group{{ $errors->first('password', ' has-error') }}">
				<input placeholder="Enter your password " class="form-control" type="password" name="password" id="password" value="" />
				{{ $errors->first('password', '<span class="help-block">:message</span>') }}
		</div>
		<?php $number = str_pad(rand(0, 99999999), 8, '0', STR_PAD_LEFT); ?>
			
		<input type="hidden" name="accntnumber" value="<?php echo $number ?>">

		<!-- Password Confirm -->
		<div class="form-group{{ $errors->first('national_id', ' has-error') }}">
				<input placeholder="Your National ID Number" class="form-control" type="text" name="national_id" id="national_id" value="" />
				{{ $errors->first('national_id', '<span class="help-block">:message</span>') }}
		</div>

		<hr>

		<!-- Form actions -->
		<div class="control-group">
				<a class="btn-danger btn" href="{{ route('home') }}">Cancel</a>
				
				<button type="submit" class="btn btn-success pull-right">Sign up</button>
		</div>
	</form>
</div>
@stop
