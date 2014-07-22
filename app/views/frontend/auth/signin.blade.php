@extends('frontend/layouts/default')

{{-- Page title --}}
@section('title')
Account Sign in ::
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
			    		<h3 class="panel-title">Sign in to Your Account</h3>
			 			</div>
			 			<div class="panel-body">
			    		<form id="form1" method="post" action="{{ route('signin') }}" class="form-horizontal" role="form">
		<!-- CSRF Token -->
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
			    			

			    			<div class="form-group {{ $errors->first('email', ' has-error') }}">
			    				<input type="email" name="email" id="email" class="form-control input-sm" placeholder="Your Email Address">
			    				{{ $errors->first('email', '<span class="help-block">:message</span>') }}
			    			</div>

			    			<div class="form-group {{ $errors->first('password', ' has-error') }}">
			    				<input type="password" name="password" id="email" class="form-control input-sm" placeholder="Your Password">
			    				{{ $errors->first('password', '<span class="help-block">:message</span>') }}
			    			</div>
			    			
	  <div class="btn-group btn-group-justified">
			<a class="btn btn-warning" href="{{ route('forgot-password') }}">Forgot Password</a>
			<a href="#" onclick="document.getElementById('form1').submit();" class="btn btn-success">Sign In</a>
	</div>

			    		
			    		</form>
			    	</div>
	    		</div>
    		</div>
    	</div>
    </div>
@stop
