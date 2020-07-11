@extends('layouts.menu')
@section('contenido')
<div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">
            Editar Producto
        </h5>
    </div>
    <div class="modal-body">
        <form   method="POST" action="{{ url('editarproducto') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
           @foreach ($data as $item)
               
         
            <div class="form-group row">
                <div class="col-6">
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <label>
                       Nombre

                    </label>
                    <div id="the-basics">
                    <input class="typeahead" name="nombre" type="text" value="{{$item->nombre}}" required="">
                        @if ($errors->has('nombre'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('nombre') }}</strong>
                        </span>
                    @endif
                        <input  required="" class="typeahead" name="id" type="hidden" value="{{$id}}">
                       
                    </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('valor') ? ' has-error' : '' }}">
                    <label>
                       Valor
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" required="" name="valor" type="number" value="{{$item->valor }}">
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
                            <input  required="" class="typeahead" name="cantidad_existente" type="number" value="{{ $item->cantidad_existente }}">
                            @if ($errors->has('cantidad_existente'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('cantidad_existente') }}</strong>
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
                        <div id="the-basics">
                            <input  required="" class="typeahead" name="cantidad_alerta" type="number" value="{{ $item->cantidad_alerta }}" min="1">
                            @if ($errors->has('cantidad_alerta'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('cantidad_alerta') }}</strong>
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
                        <input class="typeahead" required="" name="cantidad_venta_user" type="number" value="{{ $item->cantidad_venta_user }}">
                        @if ($errors->has('cantidad_venta_user'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('cantidad_venta_user') }}</strong>
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
                            <input class="typeahead" type="date" required=""   name="disponible_hasta" value="{{ $item->disponible_hasta }}">
                        @if ($errors->has('disponible_hasta'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('disponible_hasta') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
                <div  class="col-12">
                <img src="{{$item->imagen}}" width="100px" height="100px" alt="{{$item->imagen}}">
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('imagen') ? ' has-error' : '' }}">
                        <label>
                                Logo 304 px - 304 px 
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
                       <textarea class="form-control no-resize" rows="5" name="descripcion" style="width:100%;">{{ $item->descripcion }}</textarea>
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
                        Términos y Condiciones
                    </label>
                    <div id="the-basics">
                       <textarea  class="form-control no-resize" rows="5" name="descripcion_entrega" style="width:100%;">{{ $item->descripcion_entrega }}</textarea>
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
                            <option value="" disabled selected>
                               @if($item->bitucash == 0)
                               No
                               @endif
                               @if($item->bitucash == 1)
                               Si
                               @endif
                            </option>
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
                        <input class="typeahead" name="porcentajeBitucash" type="number" value="{{ $item->porcentajeBitucash }}">
                    </div>
                </div>
            
                <div class="col-12" style="height: 20px;"></div>
                <div class="col-4" style="margin-top: 10px;">
                   
                    
                        <input class="btn btn-primary" name="save" type="submit" value="Actualizar">
                       
                    </div>
                    <div class="col-4" style="margin-top: 10px;">
                   
                    
                       
                    </div>
                   
                </div>
            </div>
            <div class="row  mr-2" style="justify-content: flex-end ;">
               <a class="btn btn-info pt-2" href="{{route('volverproductos',[$item->id_sucursal])}}"  >Volver</a>                 
             </div>
            @endforeach
     </form>
    </div>

@endsection
@section('script')
    
@endsection
          
  