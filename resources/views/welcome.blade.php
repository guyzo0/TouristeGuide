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
			<div class="logo"><a href="#">Home</a></div>
			<nav class="main_nav">
				<ul>
					<li><a href="{{route('login')}}">User account</a></li>
					<li><a href="{{route('admin.login')}}">Admin account</a></li>
				</ul>
			</nav>
			<div class="header_content ml-auto">
				<div class="search header_search">
					<form action="#">
						<input type="search" class="search_input" required="required">
						<button type="submit" id="search_button" class="search_button"><img src="/template/welcome/images/magnifying-glass.svg" alt=""></button>
					</form>
				</div>
			</div>
		</div>
	</header>



	<!-- Home -->

	<div class="home">
		
		<!-- Home Slider -->

		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_1.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_2.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

				<!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_3.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_4.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_5.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_6.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_7.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_8.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_9.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_10.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_11.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_12.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_13.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_14.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_15.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_16.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_17.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_18.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_26.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_25.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_19.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_20.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_21.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_22.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_23.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_24.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_27.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_28.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_29.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_24.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

        <!-- Home Slider Item -->
				<div class="owl-item">
					<div class="home_slider_background" style="background-image:url(/template/welcome/images/home_slider_24.jpg)"></div>
					<div class="home_slider_content">
						<div class="home_slider_content_inner">
							<div class="home_slider_subtitle">Welcome to</div>
							<div class="home_slider_title">Intelligent Tourist Guide</div>
						</div>	
					</div>
				</div>

			</div>
			
			<!-- Home Slider Nav -->

			<div class="home_slider_next d-flex flex-column align-items-center justify-content-center"><img src="/template/welcome/images/arrow_r.png" alt=""></div>

			<!-- Home Slider Dots -->

			<div class="home_slider_dots_container">
				<div class="container">
					<div class="row">
						<div class="col">
							<div class="home_slider_dots">
								<ul id="home_slider_custom_dots" class="home_slider_custom_dots">
									<li class="home_slider_custom_dot active">01.<div></div></li>
									<li class="home_slider_custom_dot">02.<div></div></li>
									<li class="home_slider_custom_dot">03.<div></div></li>
								</ul>
							</div>
						</div>
					</div>
				</div>		
			</div>
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