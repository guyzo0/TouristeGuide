<!DOCTYPE html>
<html lang="en">
<head>
<title>Tourist_guide</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Tourist guide project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{ asset('/template/welcome/styles/bootstrap4/bootstrap.min.css')}}">
<link href="{{ asset('/template/welcome/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('/template/welcome/plugins/OwlCarousel2-2.2.1/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('/template/welcome/plugins/OwlCarousel2-2.2.1/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('/template/welcome/plugins/OwlCarousel2-2.2.1/animate.css')}}">
<link href="{{ asset('/template/welcome/plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('/template/welcome/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{ asset('/template/welcome/styles/responsive.css')}}">
</head>
<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_inner d-flex flex-row align-items-center justify-content-start">
			<nav class="main_nav">
				<ul>
					<li><a href="{{route('admin.home')}}"><h3>Admin_home</h3></a></li>
					<li><a href="{{route('category')}}">Manage_category</a></li>
					<li><a href="{{route('type')}}">Manage_type</a></li>
					<li><a href="{{route('region')}}">Manage_region</a></li>
					<li><a href="{{route('site')}}">Manage_site</a></li>
					<li><a href="{{route('user')}}">Manage_user</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
			</div>
		</div>
    
			<div class="burger_container d-flex flex-column align-items-center justify-content-around menu_mm"><div></div><div></div><div></div></div>
    </div>
	</header>

  <div class="menu d-flex flex-column align-items-end justify-content-start text-right menu_mm trans_400">
		<div class="menu_close_container"><div class="menu_close"><div></div><div></div></div></div>
		<nav class="menu_nav">
			<ul class="menu_mm">
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
			</ul>
		</nav>
	</div>

	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">

		</div>
		@yield('content')
		
		</div>
	</div>

	<!-- Promo -->


	<!-- New Arrivals -->

</div>

<script src="{{ asset('/template/welcome/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ asset('/template/welcome/styles/bootstrap4/popper.js')}}"></script>
<script src="{{ asset('/template/welcome/styles/bootstrap4/bootstrap.min.js')}}"></script>
<script src="{{ asset('/template/welcome/plugins/OwlCarousel2-2.2.1/owl.carousel.js')}}"></script>
<script src="{{ asset('/template/welcome/plugins/easing/easing.js"></script>
<script src="/template/welcome/plugins/parallax-js-master/parallax.min.js"></script>
<script src="/template/welcome/plugins/colorbox/jquery.colorbox-min.js"></script>
<script src="/template/welcome/js/custom.js"></script>
</body>
</html>