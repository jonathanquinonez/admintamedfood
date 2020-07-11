@extends('layouts.menu')
@section('contenido')
<div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">
            Editar Empresa
        </h5> 
    </div>
    <div class="row">@if (Session::has('exito'))
            <span class="help-block badge col-green">
                <strong>Creado con exito</strong>
            </span>
            @endif
            @if (Session::has('error'))
            <span class="help-block badge col-red">
                <strong>Ocurrio un error</strong>
            </span>
            @endif</div>
    <div class="modal-body">
        <form   method="POST" action="{{ url('empresas') }}" enctype="multipart/form-data">
            {{ csrf_field() }}
           
            <div class="form-group row">

                    
@foreach ($empresas as $data)
    

                <div class="col-6">
                        <div class="form-group{{ $errors->has('codigo_unico') ? ' has-error' : '' }}">
                        <label>
                            Código único
                        </label>
                        <div id="the-basics">
                        <input class="typeahead" name="codigo_unico" placeholder="Código único" type="text" value="{{$data->codigo_unico}}" required="">
                            @if ($errors->has('codigo_unico'))
                            <span class="help-block badge col-red">
                                <strong>{{ $errors->first('codigo_unico') }}</strong>
                            </span>
                        @endif
                            <input  required="" class="typeahead" name="id" type="hidden" value="{{$data->id}}">
                        
                        </div>
                        </div>
                </div>
                <div class="col-6">
                        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                            <label>
                                NIT
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" required="" placeholder="NIT" name="nit" type="text" value="{{$data->nit}}">
                                @if ($errors->has('nit'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('nit') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                </div>
                <div class="col-12">
                        <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                    <label>
                        Nombre
                    </label>
                    <div id="the-basics">
                        <input  required="" class="typeahead" name="nombre" type="text" value="{{$data->nombre_empresa}}">
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
                        <input class="typeahead" required="" value="{{$data->nombre_corto}}" placeholder="Siglas" name="nombre_corto" type="text">
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
                        <input class="typeahead" name="direccion" placeholder="Dirección" required="" type="text" value="{{$data->direccion_empresa}}">
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
                        <input class="typeahead" name="ciudad" autocomplete="off" value="{{ucwords($data->ciudad_empresa)}}" list="n" placeholder="Ciudad">
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
                            <option value="{{$data->tipo_empresa}}">{{$data->descripcion_tipo_empresa}}</option>
                            @foreach ($tipo as $data1)
                            <option value="{{$data1->id}}">
                                {{$data1->descripcion}}
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
                        <input class="typeahead" name="telefono" placeholder="teléfono" value="{{$data->telefono_empresa}}" type="text" required="">
                        @if ($errors->has('telefono'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('telefono') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
                <div class="col-3">
                        <div class="form-group{{ $errors->has('monto') ? ' has-error' : '' }}">
                    <label>
                        Monto Alerta 
                    </label>
                    <div id="bloodhound">
                    <input class="typeahead" name="monto"  placeholder="Monto para generar alerta" type="text" required="" value="{{$data->monto_empresa}}">
                        @if ($errors->has('monto'))
                        <span class="help-block badge col-red">
                            <strong>{{ $errors->first('monto') }}</strong>
                        </span>
                    @endif
                    </div>
                        </div>
                </div>
               <div class="col-12">
                    <label>
                    </label>
                    <img alt="logo {{$data->logo}}"  class="img-lg rounded-circle" src="{{$data->logo}}" style="width: 50px; height: 50px;"/>
                </div>
                <div class="col-12">
                        <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                            <label>
                                logo
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="logo" type="file">
                                @if ($errors->has('logo'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('logo') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                </div>
                <div class="col-4" style="margin-top: 10px;">
                   
                    
                        <input class="btn btn-primary" name="save" type="submit" value="Editar">
                       
                    </div>
                   
                   
                </div>
            </div>
         
     </form>
     <div class="row" style="justify-content: flex-end ;">
            <a class="btn btn-info pt-2" href="{{route('empresas')}}"  >Volver</a>
                    
                </div>
    </div>
    @endforeach
@endsection
@section('script')
    
@endsection
          
          

