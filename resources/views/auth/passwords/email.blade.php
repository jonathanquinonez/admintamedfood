<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitu Administrativo</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/iofrm-theme4.css')}}">
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
                        <h3>Restablecer Contrase&ntilde;a</h3>
                        <p>Ingresa tu correo electr&oacute;nico registrado donde llegar&aacute;n las instrucciones para cambiar la contrase&ntilde;a.</p>
                        <form method="POST"  action="{{ route('password.email') }}">
                            {{ csrf_field() }}
                            <input class="form-control" id="email" type="email" name="email" placeholder="Correo Electrónico" value="{{ $email or old('email') }}" required autofocus>
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                                @if (session('status'))
                                    <span class="help-block">
                                        <strong>{{ session('status') }}</strong>
                                    </span>
                                @endif
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Enviar</button>
                            </div>
                        </form>
                        <div class="other-links">&nbsp;&nbsp;
                        </div>
                        <div class="other-links">
                            <span>2020 Bitu S.A.S. Todos los derechos reservados.</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{('js/main.js')}}"></script>
</body>
</html>