@extends('frontend/layouts/account')

{{-- Page title --}}
@section('title')
Your Profile  
@stop
<style >
	@import url(http://fonts.googleapis.com/css?family=Lato:400,700);
body
{
    font-family: 'Lato', 'sans-serif';
    }
.profile 
{
    min-height: 355px;
    display: inline-block;
    }
figcaption.ratings
{
    margin-top:20px;
    }
figcaption.ratings a
{
    color:#f1c40f;
    font-size:11px;
    }
figcaption.ratings a:hover
{
    color:#f39c12;
    text-decoration:none;
    }
.divider 
{
    border-top:1px solid rgba(0,0,0,0.1);
    }
.emphasis 
{
    border-top: 4px solid transparent;
    }
.emphasis:hover 
{
    border-top: 4px solid #1abc9c;
    }
.emphasis h2
{
    margin-bottom:0;
    }
span.tags 
{
    background: #1abc9c;
    border-radius: 2px;
    color: #f5f5f5;
    font-weight: bold;
    padding: 2px 4px;
    }
.dropdown-menu 
{
    background-color: #34495e;    
    box-shadow: none;
    -webkit-box-shadow: none;
    width: 250px;
    margin-left: -125px;
    left: 50%;
    }
.dropdown-menu .divider 
{
    background:none;    
    }
.dropdown-menu>li>a
{
    color:#f5f5f5;
    }
.dropup .dropdown-menu 
{
    margin-bottom:10px;
    }
.dropup .dropdown-menu:before 
{
    content: "";
    border-top: 10px solid #34495e;
    border-right: 10px solid transparent;
    border-left: 10px solid transparent;
    position: absolute;
    bottom: -10px;
    left: 50%;
    margin-left: -10px;
    z-index: 10;
    }
</style>
<!-- <link href="{{ asset('assets/css/adminstyle.css') }}" rel="stylesheet"> -->

{{-- Account page content --}}
@section('account-content')
<div class="container">
	<div class="row">
		<div class="col-md-offset-2 col-md-8 col-lg-offset-3 col-lg-6" id="printableArea">
    	 <div class="well profile">
            <div class="col-sm-12">
                <div class="col-xs-12 col-sm-8">
                    <h2>{{$user->first_name}} {{$user->last_name}}</h2>
                    
                </div>             
                <div class="col-xs-12 col-sm-4 text-center">
                    <figure>
                        <img src="http://www.localcrimenews.com/wp-content/uploads/2013/07/default-user-icon-profile.png" alt="" class="img-circle img-responsive">
                        
                    </figure>
                </div>
            </div>            
            <div class="col-xs-12 divider text-center">
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>245</strong></h2>                    
                    <p><small>Prescriptions</small></p>
                    <button class="btn btn-success btn-block" data-toggle="modal" data-target="#modal-responsive"><span class="fa fa-plus-circle"></span> Edit Details </button>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>245</strong></h2>                    
                    <p><small>Visits</small></p>
                     <a href="{{ URL::route('change-password') }}" class="btn btn-primary">Update password</a>
                </div>
                <div class="col-xs-12 col-sm-4 emphasis">
                    <h2><strong>43</strong></h2>                    
                    <p><small>Days on system</small></p>
                    <div class="btn-group dropup btn-block">
                      <a href="{{ URL::route('change-email') }}" class="btn btn-primary">Change Email</a>
                      
                      
                    </div>
                </div>
                <hr>
                <h1>Recent Prescriptions</h1>
                <hr>
                <table class="table ">
    <thead>
        <tr>
            
            
            <th class="span2">instructions</th>
            <th class="span2">dose</th>
            
            <th class="span2">How long ago</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user->prescriptions as $prescription)
        <tr>
            <td>{{ $prescription->instructions }}</td>
            <td>{{ $prescription->dose }}</td>
            
            <td>{{ $prescription->created_at->diffForHumans() }}</td>
        </tr>
        @endforeach
    </tbody>
</table>


            </div>
    	 </div>                



<div class="modal fade" id="modal-responsive" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel"><strong>Edit your information</strong>  </h4>
                        </div>
                        <div class="modal-body">
		 			

<form method="post" action="" class="form-vertical" autocomplete="off">
	<!-- CSRF Token -->
	<input type="hidden" name="_token" value="{{ csrf_token() }}" />

	<!-- First Name -->
	<div class="form-group{{ $errors->first('first_name', ' error') }}">
		<label  for="first_name">First Name</label>
			<input class="form-control" type="text" name="first_name" id="first_name" value="{{ Input::old('first_name', $user->first_name) }}" />
			{{ $errors->first('first_name', '<span class="help-block">:message</span>') }}
	</div>

	<!-- Last Name -->
	<div class="form-group{{ $errors->first('last_name', ' has-error') }}">
		<label  for="last_name">Last Name</label>
			<input class="form-control" type="text" name="last_name" id="last_name" value="{{ Input::old('last_name', $user->last_name) }}" />
			{{ $errors->first('last_name', '<span class="help-block">:message</span>') }}
	</div>
	


	<!-- Country -->
	<div class="form-group{{ $errors->first('country', ' has-error') }}">
		<label class="control-label" for="country">Location</label>
			<input class="form-control" type="text" name="country" id="country" value="{{ Input::old('country', $user->country) }}" />
			{{ $errors->first('country', '<span class="help-block">:message</span>') }}
	</div>

	<hr>

	<!-- Form actions -->
	<div class="control-group">
		<div class="controls">
			<button type="submit" class="btn btn-block btn-success">Update your Profile</button>
		</div>
	</div>
</form>    
                       
                    </div>
                </div>
            </div>

@stop
