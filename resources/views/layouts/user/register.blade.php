<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Guide</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!-- MATERIAL DESIGN ICONIC FONT -->
		<link rel="stylesheet" href="{{ asset('template/register/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css')}}">
		
		<!-- STYLE CSS -->
		<link rel="stylesheet" href="{{ asset('template/register/css/style.css')}}">
	</head>

	<body>

		<div class="wrapper" style="background-image: url('/template/register/images/bg-registration-form-2.jpg');">
			<div class="inner">
				<form method="POST" action="{{ route('register') }}">
                @csrf
					<h3>Registration Form</h3>
					<div class="form-wrapper">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="email">Email</label>
						<input type="email" name="email"class="form-control">
					</div>
                    <div class="form-wrapper">
						<label for="contact">Contact</label>
						<input type="decimal" name="contact" class="form-control">
					</div>
                    <div class="form-wrapper">
						<label for="address">Address</label>
						<input type="text" name="address" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="password">Password</label>
						<input type="password" name="password" class="form-control">
					</div>
					<div class="form-wrapper">
						<label for="password">Confirm Password</label>
						<input type="password" name="password_confirmation" class="form-control">
					</div>
					<button>Register Now</button>
				</form>
			</div>
		</div>
		
	</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>