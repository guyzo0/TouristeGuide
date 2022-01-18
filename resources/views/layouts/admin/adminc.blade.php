<!doctype html>
<html class="no-js"  lang="en">

	<head>
		<!-- META DATA -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<!--font-family-->
		<link href="https://fonts.googleapis.com/css?family=Rufina:400,700" rel="stylesheet" />

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet" />

		<!-- TITLE OF SITE -->
		<title>Guide</title>

		<!-- favicon img -->
		<link rel="shortcut icon" type="image/icon" href="/template/admin/adminh/assets/logo/favicon.png"/>

		<!--font-awesome.min.css-->
		<link rel="stylesheet" href="{{ asset('template/admin/adminh/assets/css/font-awesome.min.css')}}" />

		<!--animate.css-->
		<link rel="stylesheet" href="{{ asset('template/admin/adminh/assets/css/animate.css')}}" />

		<!--hover.css-->
		<link rel="stylesheet" href="{{ asset('template/admin/adminh/assets/css/hover-min.css')}}">

		<!--datepicker.css-->
		<link rel="stylesheet"  href="{{ asset('template/admin/adminh/assets/css/datepicker.css')}}" >

		<!--owl.carousel.css-->
        <link rel="stylesheet" href="{{ asset('template/admin/adminh/assets/css/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{ asset('template/admin/adminh/assets/css/owl.theme.default.min.css')}}"/>

		<!-- range css-->
        <link rel="stylesheet" href="{{ asset('template/admin/adminh/assets/css/jquery-ui.min.css')}}" />

		<!--bootstrap.min.css-->
		<link rel="stylesheet" href="{{ asset('template/admin/adminh/assets/css/bootstrap.min.css')}}" />

		<!-- bootsnav -->
		<link rel="stylesheet" href="{{ asset('template/admin/adminh/assets/css/bootsnav.css')}}"/>

		<!--style.css-->
		<link rel="stylesheet" href="{{ asset('template/admin/adminh/assets/css/style.css')}}" />

		<!--responsive.css-->
		<link rel="stylesheet" href="{{ asset('template/admin/adminh/assets/css/responsive.css')}}" />

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

		<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

	</head>

	<body>
		<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade
			your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- main-menu Start -->
		<header class="top-area">
			<div class="header-area">
				<div class="container">
					<div class="row">
						<div class="col-sm-2">
							<div class="logo">
								<a href="#">
									tourist<span>Guide</span>
								</a>
							</div><!-- /.logo-->
						</div><!-- /.col-->
						<div class="col-sm-10">
							<div class="main-menu">
							
								<!-- Brand and toggle get grouped for better mobile display -->
								<div class="navbar-header">
									<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<i class="fa fa-bars"></i>
									</button><!-- / button-->
								</div><!-- /.navbar-header-->
								<div class="collapse navbar-collapse">		  
									<ul class="nav navbar-nav navbar-right">
										<li><a href="{{route('admin.home')}}">Home</a></li>
										<li><a href="{{route('category')}}">Manage_category</a></li>
										<li><a href="{{route('type')}}">Manage_type </a></li>
										<li><a href="{{route('region')}}">Manage_region</a></li>
										<li><a href="{{route('site')}}">Manage_site</a></li>
										<li><a href="{{route('user')}}">Manage_user</a></li>
										<li>
													@guest
															<li class="nav-item dropdown">
																<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
																{{ Auth::guard('admin')->user()->name }}                                </a>

																<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
																	<a class="dropdown-item" href="{{ route('logout') }}"
																	onclick="event.preventDefault();
																					document.getElementById('logout-form').submit();">
																		{{ __('Logout') }}
																	</a>

																	<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
																		@csrf
																	</form>
																</div>
															</li>
													@endguest
										</li><!--/.project-btn--> 
									</ul>
								</div><!-- /.navbar-collapse -->
							</div><!-- /.main-menu-->
						</div><!-- /.col-->
					</div><!-- /.row -->
					<div class="home-border"></div><!-- /.home-border-->
				</div><!-- /.container-->
			</div><!-- /.header-area -->

<!--about-us start -->
			<section id="home" class="about-us">
						
						@yield ('content')
	
			</section><!--/.about-us-->
			<!--about-us end -->

		</header><!-- /.top-area-->
		<!-- main-menu End -->

		
		





		<script src="{{ asset('template/admin/adminh/assets/js/jquery.js')}}"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->

		<!--modernizr.min.js-->
		<script  src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>


		<!--bootstrap.min.js-->
		<script  src="{{ asset('template/admin/adminh/assets/js/bootstrap.min.js')}}"></script>

		<!-- bootsnav js -->
		<script src="{{ asset('template/admin/adminh/assets/js/bootsnav.js')}}"></script>

		<!-- jquery.filterizr.min.js -->
		<script src="{{ asset('template/admin/adminh/assets/js/jquery.filterizr.min.js')}}"></script>

		<script  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

		<!--jquery-ui.min.js-->
        <script src="{{ asset('template/admin/adminh/assets/js/jquery-ui.min.js')}}"></script>

        <!-- counter js -->
		<script src="{{ asset('template/admin/adminh/assets/js/jquery.counterup.min.js')}}"></script>
		<script src="{{ asset('template/admin/adminh/assets/js/waypoints.min.js')}}"></script>

		<!--owl.carousel.js-->
        <script  src="{{ asset('template/admin/adminh/assets/js/owl.carousel.min.js')}}"></script>

        <!-- jquery.sticky.js -->
		<script src="{{ asset('template/admin/adminh/assets/js/jquery.sticky.js')}}"></script>

        <!--datepicker.js-->
        <script  src="{{ asset('template/admin/adminh/assets/js/datepicker.js')}}"></script>

		<!--Custom JS-->
		<script src="{{ asset('template/admin/adminh/assets/js/custom.js')}}"></script>


	</body>

</html>