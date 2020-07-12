<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Cambio de contrasena</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme12.css')}}">
</head>
<body>
    <div class="form-body" class="container-fluid">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <div class="website-logo-inside">
                            <a href="https://www.bitu.com.co">
                                <div class="logo">
                                    <img class="logo-size" src="https://bitu.s3-us-west-2.amazonaws.com/Emails/Imagenes/logo-white.png" alt="logo">
                                </div>
                            </a>
                        </div>
                        <h3>Restablecer Contrase&ntilde;a</h3>
                        <p>Para poder restablecer la contrase&ntilde;a, ingresa tu correo electr&oacute;nico y la nueva contrase&ntilde;a</p>
                        <form method="POST"  action="{{ route('password.request') }}">
                        	{{ csrf_field() }}
                        	<input type="hidden" name="token" value="{{ $token }}">
                            <input class="form-control" type="text" name="email" placeholder="Correo electrónico" value="{{ $email or old('email') }}" required autofocus>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                            <input class="form-control" type="password" name="password" placeholder="Nueva contraseña" required>
                            @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                            <input class="form-control" type="password" name="password_confirmation" placeholder="Confirmar nueva contraseña" required>
                            @if ($errors->has('password_confirmation'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                            @endif
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Restablecer Contrase&ntilde;a</button>
                            </div>
                        </form>
                        <div class="other-links">
                            <span>2020 Bitu S.A.S Todos los derechos reservados.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/main.js')}}"></script>
<script>
</body>
</html>