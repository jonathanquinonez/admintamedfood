<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitu Administrativo</title>
    <link rel="icon" href="https://bitumovil.com/wp-content/uploads/2016/10/iconofav.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme4.css">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="website-logo">
            <a href="https://www.bitu.com.co">
                <div class="logo">
                    <img class="logo-size" src="https://bitu.s3-us-west-2.amazonaws.com/Emails/Imagenes/Logo.png" alt="logo">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Bienvenidos a Bitu</h3>
                        <p>Usa tus credenciales para poder acceder a la plataforma de Administrador.</p>
                        <form method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}
                            <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="Correo Electrónico" required autofocus>
                            @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            <input class="input100" type="password" id="password" name="password" placeholder="Contraseña" required>
                            @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Ingresar</button>
                            </div>
                        </form>
                        <div class="other-links">
                           <p><a href="{{route('password.request')}}">¿Olvidaste tu contrase&ntilde;a?</a></p>&nbsp;&nbsp;
                        </div>
                         <div class="other-links">
                            <span>2020 Bitu S.A.S. Todos los derechos reservados.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script>
	window.fwSettings={
	'widget_id':62000000390
	};
	!function(){if("function"!=typeof window.FreshworksWidget){var n=function(){n.q.push(arguments)};n.q=[],window.FreshworksWidget=n}}() 
</script>
<script type='text/javascript' src='https://widget.freshworks.com/widgets/62000000390.js' async defer></script>
</body>
</html>