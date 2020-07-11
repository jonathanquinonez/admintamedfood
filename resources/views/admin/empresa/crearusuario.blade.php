@extends('layouts.menu')
@section('contenido')
<form action="{{ url('formularioadmin') }}" method="post"> 
 
        {{ csrf_field() }}  
    <div class="modal-header">
        <h2 class="modal-title" id="ModalLabel">
            Crear usuario administrador 
        </h2>
        
    </div> 
   
   <div class="row">
       <br>@if (Session::has('exito'))
        <span class="help-block badge col-green">
            <br>
            <strong>Creado con exito</strong>
            <br>
        </span>
        @endif
        @if (Session::has('error'))
        <span class="help-block badge col-red">
            <br>
            <strong>Ocurrio un error</strong>
            <br>
        </span>
        @endif
    <br>
    </div>
    
    <div class="modal-body">
        <div class="form-group row">
            <div class="col-6">
                <label>
                    Nombre
                </label>
                <div id="the-basics">
                    <input class="typeahead" name="nombre" type="text" value="{{ old('nombre') }}">
                   
                    <input class="typeahead" name="id" type="hidden" value="{{$id}}">
                    <input class="typeahead" name="admin" type="hidden" value="empresa">
                    
                    
                </div>
            </div>
            <div class="col-6">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>
                        D.I.
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" name="cedula" type="text" value="{{ old('cedula') }}">
                        @if ($errors->has('cedula'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('cedula') }}</strong>
                        </span>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="col-6">
                    <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                <label>
                    Celular
                </label>
                <div id="the-basics">
                    <input class="typeahead" name="celular" type="text" value="{{ old('celular') }}">
                    @if ($errors->has('celular'))
                    <span class="help-block badge col-red">
                        <strong>{{ $errors->first('celular') }}</strong>
                    </span>
                    @endif
                </div>
                    </div>
            </div>
           
            <div class="col-6">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label>
                    Email
                </label>
                <div id="the-basics">
                    <input class="typeahead" name="email" type="text">
                    @if ($errors->has('email'))
                    <span class="help-block badge col-red">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>
                
                </div>
            </div>
            @if ($var == 0)
            
            <div class="col-6">
                    <div class="form-group{{ $errors->has('monto') ? ' has-error' : '' }}">
                        <label>
                            Monto
                        </label>
                        <div id="bloodhound">
                            <input class="typeahead" name="monto" type="number">
                            @if ($errors->has('monto'))
                            <span class="help-block badge col-red">
                                <strong>{{ $errors->first('monto') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
            </div>
            @endif
            <!-- {{--<div class="col-6">
                <label>
                    Confirmación Password
                </label>
                <div id="bloodhound">
                    <input class="typeahead" name="password_confirmation" type="password">
                   
                </div>
            </div> --}} -->
           
            <div class="col-12" style="height: 25px;">
            </div>
            <div class="col-4">
                <input class="btn btn-success lg" name="save" type="submit" value="Crear">
                
            </div>
            
        </div>
    </div>
    <div class="row  mr-2" style="justify-content: flex-end ;">
            <a class="btn btn-info pt-2" href="{{route('volverlistaadmin',[$id])}}"  >Volver</a>
                    
                </div>

</form>
@endsection
 
@section('script')
    
@endsection
