@extends('layouts.menu')
@section('css')
<script src="{{URL::asset('assets/webshim-1.16.0/js-webshim/minified/polyfiller.js')}}"></script>
@endsection
@section('contenido')
<div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">
            Crear Producto
        </h5>
        
    </div>
    <div class="modal-body">
        <form   method="POST" action="{{ url('storeproducto') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
           
            <div class="form-group row">
                <div class="col-6">
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <label>
                       Nombre

                    </label>
                    <div id="the-basics">
                        <input class="typeahead" name="nombre" type="text" value="{{ old('nombre') }}" required="">
                        @if ($errors->has('nombre'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                        <input  required="" class="typeahead" name="id_sucursal" type="hidden" value="{{$id}}">
                       
                    </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                    <label>
                       Valor
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" required="" min="0" max="10000000000000000000" step="0.25" name="valor" type="number" value="{{ old('valor') }}">
                        @if ($errors->has('valor'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('valor') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('cantidad_existente') ? ' has-error' : '' }}">
                    <label>
                        Cantidad Existente
                    </label>
                    <div id="the-basics">
                        <input  required="" class="typeahead" name="cantidad_existente" type="number" value="{{ old('cantidad_existente') }}">
                        @if ($errors->has('cantidad_existente'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('cantidad_existente') }}</strong>
                                </span>
                            @endif
                    </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('cantidad_venta_user') ? ' has-error' : '' }}">
                    <label>
                       Cantidad venta usuario
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" required="" name="cantidad_venta_user" type="number" value="{{ old('cantidad_venta_user') }}">
                        @if ($errors->has('cantidad_venta_user'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('cantidad_venta_user') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('cantidad_alerta') ? ' has-error' : '' }}">
                    <label>
                       Cantidad Alerta
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" required="" name="cantidad_alerta" type="number" value="{{ old('cantidad_alerta') }}" min="1">
                        @if ($errors->has('cantidad_alerta'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('cantidad_alerta') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
                <div class="col-6 mt-2">
                        <div class="form-group{{ $errors->has('disponible_hasta') ? ' has-error' : '' }}">
                    <label>
                        Disponible hasta
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" name="disponible_hasta" required="" type="date" value="{{ old('disponible_hasta') }}">
                        @if ($errors->has('disponible_hasta'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('disponible_hasta') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
                        <label>
                                Logo 304 px  - 304 px
                            </label>
                        <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="imagen">

                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" name="imagen" type="text">
                                    @if ($errors->has('imagen'))
                                    <span class="help-block badge col-red">
                                        <strong>{{ $errors->first('imagen') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>
                </div>
                <div class="col-12 mt-3">
                        <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                    <label>
                        Descripción
                    </label>
                    <div id="the-basics">
                       <textarea class="form-control no-resize" rows="5" name="descripcion" style="width:100%;">{{ old('descripcion') }}</textarea>
                       @if ($errors->has('descripcion'))
                       <span class="help-block badge col-red">
                           <strong>{{ $errors->first('descripcion') }}</strong>
                       </span>
                   @endif
                    </div>
                        </div>
                </div>
                <div class="col-12 mt-3">
                        <div class="form-group{{ $errors->has('descripcion_entrega') ? ' has-error' : '' }}">
                    <label>
                        Términos y condiciones
                    </label>
                    <div id="the-basics">
                       <textarea  class="form-control no-resize" rows="5" name="descripcion_entrega" style="width:100%;">{{ old('descripcion_entrega') }}</textarea>
                       @if ($errors->has('descripcion_entrega'))
                       <span class="help-block badge col-red">
                           <strong>{{ $errors->first('descripcion_entrega') }}</strong>
                       </span>
                   @endif
                    </div>
                        </div>
                </div>
                <div class="col-6">

                    <div class="form-group">
                        <label for="exampleFormControlSelect3">
                            Bitucash
                        </label>
                        <select class="form-control form-control-sm" name="bitucash" id="exampleFormControlSelect3">
                           
                            <option value="0">
                                No
                            </option>
                            <option value="1">
                                Si
                            </option>
                        </select>
                    </div>
                </div>
                <div class="col-6">
                    <div class="form-group">
                        <label>Porcentaje Bitucash</label>
                        <input class="typeahead" name="porcentajeBitucash" type="number" value="{{ old('porcentajeBitucash') }}">
                    </div>
                </div>
            
                <div class="col-12" style="height: 20px;"></div>
                <div class="col-4" style="margin-top: 10px;">
                   
                    
                        <input class="btn btn-success" name="save" type="submit" value="Crear">
                       
                    </div>
                    <div class="col-4" style="margin-top: 10px;">
                   
                    
                       
                    </div>
                   
                </div>
            </div>
            <div class="row  mr-2" style="justify-content: flex-end ;">
                    <a class="btn btn-info pt-2" href="{{route('volverproductos',[$id])}}"  >Volver</a>                 
                  </div>
     </form>
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
          
  