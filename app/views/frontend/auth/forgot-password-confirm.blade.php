@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Forgot Password ::
@parent
@stop

{{-- Page content --}}
@section('content')
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
        <div class="col-xs-12 col-sm-8 col-md-4 col-sm-offset-2 col-md-offset-4">
        	<div class="panel panel-default">
        		<div class="panel-heading">
			    		<h3 class="panel-title">Set New Password</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form id="form1" method="post" action="" class="form-horizontal">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- password -->
	<div class="form-group">
	<label class="control-label" for="password">New Password</label>
			    				<input type="password" name="password" id="email" class="form-control input-sm" placeholder="Your New Password">
			    			</div>


			    			<div class="form-group">
			    			<label class="control-label" for="password_confirm">Password Confirmation</label>
			    				<input type="password" name="password_confirm" id="email" class="form-control input-sm" placeholder="Confirm Password">
			    			</div>

	<!-- Form actions -->
	<div class="btn-group btn-group-justified">
			<a class="btn btn-warning" href="{{ route('home') }}">Cancel</a>
			<a href="#" onclick="document.getElementById('form1').submit();" class="btn btn-success">Submit!</a>
	</div>

	
</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
@stop
