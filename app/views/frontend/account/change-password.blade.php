@extends('frontend/layouts/account')

{{-- Page title --}}
@section('title')
Your Profile
@stop

{{-- Account page content --}}
@section('account-content')
<style>
	body{
    background-color: #525252;
}
.centered-form{
	margin-top: 60px;
}

.centered-form .panel{
	background: rgba(255, 255, 255, 0.8);
	box-shadow: rgba(0, 0, 0, 0.3) 20px 20px 20px;
}
</style>
<div class="container">
        <div class="row centered-form">
        <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Change Password</h3>
			 			</div>
			 			<div class="panel-body">

<form method="post" action="" class="form-vertical" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<div class="form-group{{ $errors->first('old_password', ' has-error') }}">
		<label  for="first_name">Currrent password</label>
			<input class="form-control" placeholder="Current password" type="password" name="old_password" id="password" value=""  />
			{{ $errors->first('old_password', '<span class="help-block">:message</span>') }}
	</div>
	<!-- password -->
	<div class="form-group{{ $errors->first('password', ' has-error') }}">
		<label  for="first_name">New password</label>
			<input class="form-control" placeholder="New password" type="password" name="password" id="password" value=""  />
			{{ $errors->first('password', '<span class="help-block">:message</span>') }}
	</div>

	<!-- confirm -->
	<div class="form-group{{ $errors->first('password_confirm', ' has-error') }}">
		<label  for="last_name">Confirm Password</label>
			<input class="form-control" type="password" placeholder="password confirmation"  name="password_confirm" id="password_confirm" value="" />
			{{ $errors->first('password_confirm', '<span class="help-block">:message</span>') }}
	</div>

	

	<hr>
<a href="{{ route('forgot-password') }}" class="btn btn-link">I forgot my password</a>
	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-block btn-success">Change Password</button>
		</div>
	</div>
</form>
			    		
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>

@stop
