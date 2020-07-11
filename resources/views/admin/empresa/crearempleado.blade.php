@extends('layouts.menu')
@section('css')
<script src="{{URL::asset('assets/webshim-1.16.0/js-webshim/minified/polyfiller.js')}}"></script>
@endsection
@section('contenido')
<form action="{{ url('formularioadmin') }}" method="post">
 
        {{ csrf_field() }}
    <div class="modal-header">
        <h2 class="modal-title" id="ModalLabel">
            Crear usuario
        </h2>
        
    </div> 
 
    <div class="modal-body">
        <div class="form-group row">
            <div class="col-6">
                    <div class="form-group{{ $errors->has('celular') ? ' has-error' : '' }}">
                <label>
                    Nombre
                </label>
                <div id="the-basics">
                    <input class="typeahead" name="nombre" type="text" required value="{{ old('nombre') }}">
                    <input class="typeahead" name="admin" hidden type="text" value="0">
                   
                    <input class="typeahead" name="id" type="hidden" value="{{$id}}">
                    @if ($errors->has('nombre'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                        @endif
                    
                </div>
                    </div>
            </div>
            <div class="col-6">
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>
                        D.I.
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" name="cedula" required type="text" value="{{ old('cedula') }}">
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
                    <input class="typeahead" name="celular" required type="text" value="{{ old('celular') }}">
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
                    <input class="typeahead" name="email" required type="text">
                    @if ($errors->has('email'))
                    <span class="help-block badge col-red">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
                </div>
                
                </div>
            </div>
            <div class="col-6">
                    <div class="form-group{{ $errors->has('monto') ? ' has-error' : '' }}">
                    <label>
                        Monto
                    </label>
                    <div id="the-basics">
                        <input class="typeahead" name="monto" min="0" max="100000000000000000000" step="0.25"  required type="number">
                        @if ($errors->has('monto'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('monto') }}</strong>
                        </span>
                    @endif
                    </div>
                    
                    </div>
                </div>
            {{-- <div class="col-6">
                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label>
                            Password
                        </label>
                        <div id="bloodhound">
                            <input class="typeahead" name="password" required type="password">
                            @if ($errors->has('password'))
                            <span class="help-block badge col-red">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>
            </div> --}}
            {{-- <div class="col-6">
                <label>
                    Confirmación Password
                </label>
                <div id="bloodhound">
                    <input class="typeahead" name="password_confirmation" required type="password">
                   
                </div>
            </div>
            --}}
            <div class="col-12" style="height: 25px;">
            </div>
            <div class="col-4">
                <input class="btn btn-success lg" name="save" type="submit" value="Crear">
                
            </div>
            {{-- <div class="col-12 center">
                <br>
                @if (Session::has('exito'))
                    <div class="help-block badge col-green">
                        
                        <h5>Creado con exito</h5>
                        
                    </div>
                    @endif
                    @if (Session::has('error'))
                    <span class="help-block badge col-red">
                       
                        <strong>Ocurrio un error</strong>
                       
                    </span>
                    @endif
                <br>
                </div> --}}
        </div>
    </div>

    <div class="row" style="justify-content: flex-end ;">
    <a class="btn btn-info pt-2" href="{{route('empresadetalle',[$id])}}"  >Volver</a>
            
        </div>
</form>

@endsection
 
@section('script')
<script>
    webshims.setOptions('forms-ext', {
     replaceUI: 'auto',
     types: 'number' 
 });
 webshims.polyfill('forms forms-ext');
     </script>
 
@endsection
