<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Basic Page Needs
		================================================== -->
		<meta charset="utf-8" />
		<title>
			@section('title')
			@show
		</title>
		<meta name="keywords" content="your, awesome, keywords, here" />
		<meta name="author" content="Jon Doe" />
		<meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

		<!-- Mobile Specific Metas
		================================================== -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- CSS
		================================================== -->
		<link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
		 <link href="{{ asset('assets/css/adminstyle.css') }}" rel="stylesheet">
		<link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">

		<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
		<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
<style >
	/*
 * Base structure
 */

/* Move down content because we have a fixed navbar that is 50px tall */
body {
  padding-top: 50px;
}


/*
 * Global add-ons
 */

.sub-header {
  padding-bottom: 10px;
  border-bottom: 1px solid #eee;
}


/*
 * Sidebar
 */

/* Hide for mobile, show later */
.sidebar {
  display: none;
}
@media (min-width: 768px) {
  .sidebar {
    position: fixed;
    top: 51px;
    bottom: 0;
    left: 0;
    z-index: 1000;
    display: block;
    padding: 20px;
    overflow-x: hidden;
    overflow-y: auto; /* Scrollable contents if viewport is shorter than content. */
    background-color: #f5f5f5;
    border-right: 1px solid #eee;
  }
}

/* Sidebar navigation */
.nav-sidebar {
  margin-right: -21px; /* 20px padding + 1px border */
  margin-bottom: 20px;
  margin-left: -20px;
}
.nav-sidebar > li > a {
  padding-right: 20px;
  padding-left: 20px;
}



/*
 * Main content
 */

.main {
  padding: 20px;
}
@media (min-width: 768px) {
  .main {
    padding-right: 40px;
    padding-left: 40px;
  }
}
.main .page-header {
  margin-top: 0;
}


/*
 * Placeholder dashboard ideas
 */

.placeholders {
  margin-bottom: 30px;
  text-align: center;
}
.placeholders h4 {
  margin-bottom: 0;
}
.placeholder {
  margin-bottom: 20px;
}
.placeholder img {
  display: inline-block;
  border-radius: 50%;
}
.sidebar h4, .sidebar a{
  color: white;
}
</style>
	</head>

	<body>
		 <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
           <a class="navbar-brand" href="{{ URL::to('admin') }}"><span class="glyphicon glyphicon-dashboard"></span> Admin Dashboard</a> 
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
          <li class="nav-divider"></li>
          <li><a href="#" onclick="printDiv('printableArea')"><i class="fa fa-print fa-lg"></i>  Print  </a></li>
          <li class="nav-divider"></li>
            <li><a href="{{ route('profile') }}">{{ Sentry::getUser()->first_name }} {{ Sentry::getUser()->last_name }}</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar " id="leftside-navigation" style="
    background: #071827;
">
          <ul class="nav nav-sidebar">
            <li{{ (Request::is('admin') ? ' class="active"' : '') }}><a href="{{ URL::to('admin') }}"><span class="fa fa-user-md fa-lg"></span> Admin Home</a></li>
             <li class="nav-divider"></li>
             <h4 class="text-center">Drugs</h4>
              <li class="nav-divider"></li>
			<li{{ (Request::is('admin/drugs') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/drugs') }}"><span class="fa fa-user-md fa-lg"></span> Manage Drugs</a></li>
      <li{{ (Request::is('admin/drugs/create') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/drugs/create') }}"><i class="fa fa-medkit fa-lg"></i>  Add New Drug</a></li>
      <li class="nav-divider"></li>
             <h4 class="text-center">prescriptions</h4>
              <li class="nav-divider"></li>
    <li{{ (Request::is('admin/prescriptions') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/prescriptions') }}"><i class="fa fa-plus-square fa-lg"></i>  Manage Prescriptions</a></li>
    <li{{ (Request::is('admin/prescriptions/create') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/prescriptions/create') }}"><i class="fa fa-user-md fa-lg"></i>  Prescribe Drugs</a></li>
			
          </ul>
          <ul class="nav nav-sidebar">
          <li class="nav-divider"></li>
             <h4 class="text-center">User Management</h4>
              <li class="nav-divider"></li>
          <li{{ (Request::is('admin/users*') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/users') }}"><span class="glyphicon glyphicon-user"></span> Users</a></li>
										<li{{ (Request::is('admin/groups*') ? ' class="active"' : '') }}><a href="{{ URL::to('admin/groups') }}"><i class="fa fa-users"></i> Groups</a></li>
          
          </ul>
          
        </div>
        
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main" id="main-content">
          @include('frontend/notifications')
          <h1 class="page-header">@yield('title')</h1> 
          @yield('content')
          <hr>
          @include('stats')
        </div>
      </div>
    </div>
   <script>

   function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
		<!-- Javascripts
		================================================== -->
		<script src="{{ asset('assets/js/jquery.1.10.2.min.js') }}"></script>
		<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
	</body>
</html>
