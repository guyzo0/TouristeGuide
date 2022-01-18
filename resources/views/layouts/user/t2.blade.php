<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tourist_guide</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="freehtml5.co" />

	<!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FreeHTML5.co
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:300,400" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ asset('/template/user//css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ asset('/template/user/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ asset('/template/user/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ asset('/template/user/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ asset('/template/user/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ asset('/template/user/css/owl.theme.default.min.css')}}">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="{{ asset('/template/user/css/flexslider.css')}}">

	<!-- Pricing -->
	<link rel="stylesheet" href="{{ asset('/template/user/css/pricing.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ asset('/template/user/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{ asset('/template/user/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<nav class="fh5co-nav" role="navigation">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					
					<div class="col-xs-10 text-right menu-1">
						<ul>
							@guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

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
						</ul>
					</div>
				</div>	
			</div>
		</div>
	</nav>
</div>


	</head>
	<body>
    <aside id="fh5co-hero">
		<ul>
		   	<li style="background-image: url(/template/user/images/10215.jpg);">
		   	    <div class="overlay-gradient"></div>
                    @yield('content')
		   	</li>		   	
		</ul>
	</aside>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ asset('/template/user/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ asset('/template/user/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ asset('/template/user/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{ asset('/template/user/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ asset('/template/user/js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{ asset('/template/user/js/owl.carousel.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{ asset('/template/user/js/jquery.flexslider-min.js')}}"></script>
	<!-- countTo -->
	<script src="{{ asset('/template/user/js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ asset('/template/user/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ asset('/template/user/js/magnific-popup-options.js')}}"></script>
	<!-- Count Down -->
	<script src="{{ asset('/template/user/js/simplyCountdown.js')}}"></script>
	<!-- Main -->
	<script src="{{ asset('/template/user/js/main.js')}}"></script>
	<script>
    var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

    // default example
    simplyCountdown('.simply-countdown-one', {
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate()
    });

    //jQuery example
    $('#simply-countdown-losange').simplyCountdown({
        year: d.getFullYear(),
        month: d.getMonth() + 1,
        day: d.getDate(),
        enableUtc: false
    });
	</script>
	</body>
</html>

