<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Guide</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="template/user/home/assets/images/favicon.ico"/>
    <!-- Font Awesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <!-- Slick slider -->
    <link href="{{ asset('template/user/home/assetassets/css/slick.css')}}" rel="stylesheet">
    <!-- Theme color -->
    <link id="switcher" href="{{ asset('template/user/home/assets/css/theme-color/default-theme.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{ asset('template/user/home/style.css')}}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Poppins For Title -->
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
 
 
	</head>
  <body>

  

   <!--START SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#">
      <i class="fa fa-angle-up"></i>
    </a>
  <!-- END SCROLL TOP BUTTON -->
  	
  	<!-- Start Header -->
	<header id="mu-hero">
		<div class="container">
			<div class="mu-hero-area">
				
				<div class="mu-hero-top">
					<!-- Start center Logo -->
					<div class="mu-logo-area">
						<!-- text based logo -->
						<a class="mu-logo" href="index.html"><span>TouristGuide</span></a>
						<!-- Image based logo -->
						<!-- <a class="mu-logo" href="index.html"><img src="assets/images/logo.jpg" alt="logo img"></a> -->
					</div>
					<!-- End center Logo -->
					<div class="mu-hero-top-info">
						<ul>
							<li>
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
							</li>
						</ul>
						
					</div>
				</div>

				<!-- Start hero featured area -->
				<div class="mu-hero-featured-area">
					<div class="mu-hero-featured-content">
						<h2>Welcome To The Tourist dashboard! </h2>
						<h1>Click below to display the Category of Tourism site in Cameroon</h1>
						<p>Due to its geographical peculiarities (relief, climate, fauna and flora, peoples and traditions),
                                 Cameroon offers exceptional tourist opportunities. To travel to Cameroon, several precautions must be taken. 
								 For example, you must have an international anti-yellow fever vaccination certificate. On the other hand, it 
								 is strongly recommended to protect yourself against malaria. Finally, do not forget to apply for a tourist 
								 visa in which case we will not enter the territory.</p>

						<a href="{{ route('tcategory')}}" class="mu-book-now-btn">Click Now!</a>
						
					</div>
				</div>
				<!-- End hero featured area -->

			</div>
		</div>
	</header>
	<!-- End Header -->



	
	<!-- JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
	<!-- Slick slider -->
    <script type="text/javascript" src="{{ asset('template/user/home/assets/js/slick.min.js')}}"></script>
    <!-- Ajax contact form  -->
    <script type="text/javascript" src="{{ asset('template/user/home/assets/js/app.js')}}"></script>
  
      
	
    <!-- Custom js -->
	<script type="text/javascript" src="{{ asset('template/user/home/assets/js/custom.js')}}"></script>

	
	
    
  </body>
</html>