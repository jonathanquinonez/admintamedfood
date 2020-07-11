@extends('layouts.menu')
@section('css')
<script src="{{URL::asset('assets/webshim-1.16.0/js-webshim/minified/polyfiller.js')}}"></script>
@endsection
@section('contenido')
<div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">
            Crear Entidad
        </h5> 
    </div>
    {{-- <div class="row"> <div class="col-12 center">
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
            </div></div> --}}
    <div class="modal-body">
        <form   method="POST" action="{{ url('crearempresas') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
           
            <div class="form-group row">

                    

                <div class="col-6">
                        <div class="form-group{{ $errors->has('codigo_unico') ? ' has-error' : '' }}">
                        <label>
                            Código único
                        </label>
                        <div id="the-basics">
                            <input class="typeahead" name="codigo_unico" placeholder="Código único" type="text" value="" required="">
                            @if ($errors->has('codigo_unico'))
                            <span class="help-block badge col-red">
                                <strong>{{ $errors->first('codigo_unico') }}</strong>
                            </span>
                        @endif
                            <input  required="" class="typeahead" name="id" type="hidden" value="">
                        
                        </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                            <label>
                                NIT
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" required="" placeholder="NIT" name="nit" type="text" value="">
                                @if ($errors->has('nit'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('nit') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <label>
                        Nombre
                    </label>
                    <div id="the-basics">
                        <input  required="" class="typeahead" value="{{ old('nombre') }}" name="nombre" type="text" value="">
                        @if ($errors->has('nombre'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('nombre_corto') ? ' has-error' : '' }}">
                    <label>
                        Siglas
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" required="" value="{{ old('nombre_corto') }}" placeholder="Siglas" name="nombre_corto" type="text" value="">
                        @if ($errors->has('nombre_corto'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('nombre_corto') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
               
                <div class="col-6">
                        <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                    <label>
                        Dirección
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" name="direccion" value="{{ old('direccion') }}" placeholder="Dirección" required="" type="text" value="">
                        @if ($errors->has('direccion'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('direccion') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                        <label>Ciudad</label>
                        <input class="typeahead" name="ciudad" autocomplete="off" value="{{ old('ciudad') }}" list="n" placeholder="Ciudad">
                        <datalist id="n">
                                @foreach ($ciudad as $item)
                                <option value="{{$item->descripcion}}">{{$item->descripcion}}</option>
                                @endforeach
                        </datalist> 
                        @if ($errors->has('ciudad'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('ciudad') }}</strong>
                                </span>
                            @endif
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('tipo_empresa') ? ' has-error' : '' }}">
                        <label>
                            Tipo entidad
                        </label>
                        <div id="the-basics" class="mt-2">
                        <select class="form-control typeahead" name="tipo_empresa">
                            
                            @foreach ($tipo as $data)
                            <option value="{{$data->id}}">
                                {{$data->descripcion}}
                            </option>
                            @endforeach
                        </select>
                        @if ($errors->has('tipo_empresa'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('tipo_empresa') }}</strong>
                                </span>
                            @endif
                    </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                    <label>
                        Teléfono
                    </label>
                    <div id="the-basics">
                        <input class="typeahead" name="telefono" placeholder="teléfono" value="{{ old('telefono') }}" type="text" required="" value="">
                        @if ($errors->has('telefono'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('telefono') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('monto') ? ' has-error' : '' }}">
                    <label>
                        Monto Alerta
                    </label>
                    <div id="bloodhound">
                        
                            {{-- <input type="number" id="my_number_field" min="0" max="10" step="0.25" value="0.00" /> --}}
                        <input class="typeahead" name="monto" min="0" max="10000000000000000000" step="0.25" value="{{ old('monto') }}" placeholder="Monto para generar alerta" type="number" required="" value="">
                        @if ($errors->has('monto'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('monto') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
               
                <div class="col-12">
                        <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                            <label>
                                logo
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="logo" type="file" required="">
                                @if ($errors->has('logo'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('logo') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                </div>
                <div class="col-4" style="margin-top: 10px;">
                   
                    
                        <input class="btn btn-success" name="save" type="submit" value="Crear">
                       
                    </div>
                   
                   
                </div>
            </div>
         
     </form>
     <div class="row" style="justify-content: flex-end ;">
            <a class="btn btn-info pt-2" href="{{route('empresas')}}"  >Volver</a>
                    
                </div>
    </div>
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
          
          

