<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8" />
        <title>
            Drug Management
            @section('title')
            
            @show
        </title>
        <meta name="keywords" content="your, awesome, keywords, here" />
        <meta name="author" content="Peter Bix" />
        <meta name="description" content="Lorem ipsum dolor sit amet, nihil fabulas et sea, nam posse menandri scripserit no, mei." />

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS
        ================================================== -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/font-awesome.min.css') }}" rel="stylesheet">
        <style>
        @section('styles')
        
        @show
        </style>

        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Favicons
        ================================================== -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
    </head>

    <body>
     
      <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ URL::to('/') }}"><i class="fa fa-medkit fa-lg"></i> Drug Management</a>
        </div>

                        <div class="collapse navbar-collapse">
                            <ul class="nav navbar-nav">
                            @if (Sentry::check())
                                <li {{ (Request::is('buy') ? 'class="active"' : '') }}> {{ link_to_route('home', 'home') }}</li>
                                <li class="nav-divider"></li>
                                <li {{ (Request::is('account/profile') ? 'class="active"' : '') }}> <a href="{{ route('profile') }}"> My Account</a></li>
                            @endif
                                
                                <li {{ (Request::is('about-us') ? 'class="active"' : '') }}><a href="{{ URL::to('about-us') }}"> About us</a></li>
                                <li {{ (Request::is('contact-us') ? 'class="active"' : '') }}><a href="{{ URL::to('contact-us') }}"> Contact us</a></li>
                                <li><a href="#" onclick="printDiv('printableArea')"><i class="fa fa-print fa-lg"></i>  Print  </a></li>
                            </ul>

                            <ul class="nav navbar-nav navbar-right">
                                @if (Sentry::check())

                                <li class="dropdown {{ (Request::is('account*') ? ' active' : '') }}">
                                    <a style="color:white;" class="dropdown-toggle" id="dLabel" role="button" data-toggle="dropdown" data-target="#" href="{{ route('account') }}">
                            {{ Sentry::getUser()->first_name }}
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
                                        @if(Sentry::getUser()->hasAccess('admin'))
                                        <li><a href="{{ route('admin') }}"><span class="glyphicon glyphicon-dashboard"></span> Admin Backend</a></li>
                                       <li class="divider"></li>
                                        @endif

                                        <li{{ (Request::is('account/profile') ? ' class="active"' : '') }}><a href="{{ route('profile') }}"><span  class="glyphicon glyphicon-user"></span> Your profile</a></li>
                                        <li class="divider"></li>
                                        <li><a href="{{ route('logout') }}"><span  class="glyphicon glyphicon-off"></span> Logout</a></li>
                                    </ul>
                                </li>
                                @else
                                <ul class="nav navbar-nav">
                                    <li {{ (Request::is('auth/signin') ? 'class="active"' : '') }}><a href="{{ route('signin') }}">Sign in</a></li>
                                    <li {{ (Request::is('auth/signup') ? 'class="active"' : '') }}><a href="{{ route('signup') }}">Sign up</a></li>
                                </ul>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div class ="container">
            <div class ="jumbtron">
            <!-- Notifications -->
            @include('frontend/notifications')

            <!-- Content -->

            @yield('content')

            
            </div>
            </div>
         
            <!-- Footer -->
            <footer id="footer">
            
            </footer>
        </div>
        <!-- Javascripts
        ================================================== -->
        <script src="{{ asset('assets/js/jquery.1.10.2.min.js') }}"></script>
        <script src="{{ asset('assets/js/share.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>


    <script>

   function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
        

    </body>
</html>
