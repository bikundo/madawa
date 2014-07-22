@extends('frontend/layouts/account')

{{-- Page title --}}
@section('title')
| Change your Email
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
			    		<h3 class="panel-title">Update Email Address</h3>
			 			</div>
			 			<div class="panel-body">

<form method="post" action="" class="form-vertical" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<div class="form-group{{ $errors->first('email', ' has-error') }}">
		<label  for="first_name">new email</label>
			<input class="form-control"  type="text" name="email" id="email" value="" />
			{{ $errors->first('email', '<span class="help-block">:message</span>') }}
	</div>
	<!-- password -->
	<div class="form-group{{ $errors->first('email_confirm', ' has-error') }}">
		<label class="control-label" for="email_confirm">Confirm New Email</label>
			<input class="form-control" type="text" placeholder="confirm new email" name="email_confirm" id="email_confirm" value="" />
			{{ $errors->first('email_confirm', '<span class="help-block">:message</span>') }}
	</div>

	<!-- confirm -->
	<div class="form-group{{ $errors->first('current_password', ' has-error') }}">
		<label class="control-label" for="current_password">Current Password</label>
			<input class="form-control" type="password" name="current_password" id="current_password" value="" placeholder="your password" />
			{{ $errors->first('current_password', '<span class="help-block">:message</span>') }}
	</div>

	

	<hr>
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
