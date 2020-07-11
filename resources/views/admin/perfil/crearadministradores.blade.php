@extends('layouts.menu')
@section('contenido')
    <div class="title">
        <h4>Crear administrador</h4>
    </div>

<div class="row">
        @if (Session::has('exito'))
        <br>
            <span class="help-block badge col-green">
                <strong>Creado con exito</strong>
            </span>
            <br>
            @endif
            @if (Session::has('error'))
            <br>
            <span class="help-block badge col-red">
                <strong>Ocurrio un error</strong>
            </span>
            <br>
            @endif
        </div>
<form   method="POST" action="{{ url('crearsuperusuario') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="row">
        <div class="col-12">
                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                <label>
                      Nombre
                    </label>
                    <input class="typeahead" name="nombre" placeholder="Nombre" type="text" value="{{ old('nombre') }}" required="">
                    @if ($errors->has('nombre'))
                    <span class="help-block badge col-red">
                        <strong>{{ $errors->first('nombre') }}</strong>
                    </span>
                @endif
                </div>
        </div>
        {{-- <div class="col-12">
                <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                <label>
                      Dirección
                    </label>
                    <input class="typeahead" name="direccion" placeholder="Dirección" type="text" value="{{ old('direccion') }}" required="">
                    @if ($errors->has('direccion'))
                    <span class="help-block badge col-red">
                        <strong>{{ $errors->first('direccion') }}</strong>
                    </span>
                @endif
                </div>
        </div> --}}
        <div class="col-12">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label>
                      Correo
                    </label>
                    <input class="typeahead" name="email" placeholder="Correo" type="email" value="{{ old('email') }}" required="">
                    @if ($errors->has('email'))
                    <span class="help-block badge col-red">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>
        </div>
        <div class="col-12">
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label>
                      Contraseña
                    </label>
                    <input class="typeahead" name="password" placeholder="Contraseña" type="password" value="" required="">
                    @if ($errors->has('password'))
                    <span class="help-block badge col-red">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
                </div>
        </div>
        <div class="col-12">
                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label>
                      Confirmación de Contraseña
                    </label>
                    <input class="typeahead" name="password_confirmation" placeholder="Confirmación de contraseña" type="password" value="" required="">
                    @if ($errors->has('password_confirmation'))
                    <span class="help-block badge col-red">
                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                    </span>
                @endif
                </div>
        </div>
        <div class="col-12">
            <input class="btn btn-success" type="submit" value="Crear">
        </div>
    </div>
    </form>
    <div class="row  mr-2" style="justify-content: flex-end ;">
            <a class="btn btn-info pt-2" href="{{route('volversuperadmin')}}"  >Volver</a>
                    
                </div>
@endsection