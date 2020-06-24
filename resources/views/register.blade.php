<!DOCTYPE html>

<head>
	<title>Registrasi</title>
	<link href="img/logo.png" rel="icon">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="images/icons/favicon.ico" />
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/b+ootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>

<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url(img/intro-carousel/6.png);">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url(img/intro-carousel/6.png);">
					<span class="login100-form-title-1">
						REGISTER
					</span>
				</div>

				<form class="login100-form validate-form" method="POST" action="{{ route('register') }}">
					@csrf
					<div class="wrap-input100 validate-input m-b-26" data-validate="Name is required">
						<span class="label-input100">Nama</span>
						<input class="input100 {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" id="inputName" name="name" placeholder="Enter name" value="{{ old('name') }}">
						<span class="focus-input100"></span>
					</div>
					@if ($errors->has('name'))
					<div class="invalid-feedback">
						{{ $errors->first('name') }}
					</div>
					@endif

					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input class="input100 {{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" id="inputEmail" name="email" placeholder="Enter email" value="{{ old('email') }}">
						<span class="focus-input100"></span>
					</div>
					@if ($errors->has('email'))
					<div class="invalid-feedback">
						{{ $errors->first('email') }}
					</div>
					@endif

					<div class="wrap-input100 validate-input m-b-18" data-validate="Password is required">
						<span class="label-input100">Password</span>
						<input class="input100 {{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" id="inputPassword" name="password" placeholder="Enter password">
						<span class="focus-input100"></span>
					</div>
					@if ($errors->has('password'))
					<div class="invalid-feedback">
						{{ $errors->first('password') }}
					</div>
					@endif

					<div class="wrap-input100 validate-input m-b-26" data-validate="Re-type Password is required">
						<span class="label-input100">Re-type Password</span>
						<input class="input100 {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" type="text" id="inputPassword" name="password_confirmation" placeholder="re-type password">
						<span class="focus-input100"></span>
					</div>
					@if ($errors->has('password_confirmation'))
					<div class="invalid-feedback">
						{{ $errors->first('password_confirmation') }}
					</div>
					@endif

					<div class="container-login00-form-btn">
						<button class="login100-form-btn" type="submit">
							Register
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/animsition/js/animsition.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="vendor/select2/select2.min.js"></script>
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
	<script src="vendor/countdowntime/countdowntime.js"></script>
	<script src="js/main.js"></script>

</body>

</html>