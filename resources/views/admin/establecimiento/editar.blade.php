@extends('layouts.menu')
@section('contenido')
       
            <div class="modal-header">
                <h2 class="modal-title" id="ModalLabel">
                    Editar establecimiento
                </h2>
               
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <form action="{{ url('actualizar') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                        
                            @foreach ($establecimientos as  $data)
                            <div class="col-6">
                                    <h2 class="card-inside-title">Nombre</h2>
                                <div id="the-basics">
                                        <input class="typeahead" name="nombre"  required="" type="text" value="{{$data->nombre}}">

                                        <input class="typeahead" name="id"  hidden="" type="text" value="{{$data->id}}">
    
                                </div>
                            </div>
                            <div class="col-6">
                                    <div class="form-group{{ $errors->has('codigo_unico') ? ' has-error' : '' }}">
                                            <h2 class="card-inside-title">Código único</h2>
                                        <div id="the-basics">
                                                <input class="typeahead" name="codigo_unico"  required="" type="text" value="{{$data->codigo_unico}}">
                                            @if ($errors->has('codigo_unico'))
                                            <span class="help-block badge col-red">
                                                <strong>{{ $errors->first('codigo_unico') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                            </div>
                             <div class="col-6">
                                    <div class="form-group{{ $errors->has('razon_social') ? ' has-error' : '' }}">
                                    <h2 class="card-inside-title">Razón social</h2>
                                <div id="the-basics">
                                        <input class="typeahead" name="razon_social"  required="" type="text" value="{{$data->razon_social}}">
                                    @if ($errors->has('razon_social'))
                                    <span class="help-block badge col-red">
                                        <strong>{{ $errors->first('razon_social') }}</strong>
                                    </span>
                                @endif
                                </div>
                                    </div>
                            </div>
                                <div class="col-6">
                                        <div class="form-group{{ $errors->has('nit') ? ' has-error' : '' }}">
                                                <h2 class="card-inside-title">NIT</h2>
                                            <div id="the-basics">
                                                    <input class="typeahead" name="nit"  required="" type="text" value="{{$data->nit}}">
                                                @if ($errors->has('nit'))
                                                <span class="help-block badge col-red">
                                                    <strong>{{ $errors->first('nit') }}</strong>
                                                </span>
                                            @endif
    
                                            </div>
                                        </div>
                                </div>
                          
                            <div class="col-4">
                                    <h2 class="card-inside-title">Descripción</h2>
                                <div id="the-basics">
                                        <input class="typeahead" name="direccion" required="" type="text" value="{{$data->direccion}}">
                                </div>
                            </div>
    
                            <div class="col-4">
                                    <h2 class="card-inside-title">Ciudad</h2>
                                    <input class="typeahead" required="" name="ciudad" list="n" placeholder="Ciudad" value="{{$data->ciudad}}">
                                    <datalist id="n">
                                            @foreach ($ciudad as $item)
                                            <option value="{{$item->descripcion}}">{{$item->descripcion}}</option>
                                            @endforeach
                                    </datalist> 
                            </div>
                            <div class="col-4">
                                    <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                                            <h2 class="card-inside-title">Correo</h2>
                                        <div id="bloodhound">
                                                <input class="typeahead" name="correo" required="" type="email" value="{{$data->correo}}">
                                            @if ($errors->has('correo'))
                                            <span class="help-block badge col-red">
                                                <strong>{{ $errors->first('correo') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                    </div>
                            </div>
                            <div class="col-6">
                                    <div class="form-group{{ $errors->has('nombre_contacto') ? ' has-error' : '' }}">
                                            <h2 class="card-inside-title">Persona contacto</h2>
                                    <div id="bloodhound">
                                            <input class="typeahead" name="nombre_contacto" required="" type="text" value="{{$data->nombre_contacto}}">
                                        @if ($errors->has('nombre_contacto'))
                                            <span class="help-block badge col-red">
                                                <strong>{{ $errors->first('nombre_contacto') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    </div>
                                </div>
                                <div class="col-6">
                                        <div class="form-group{{ $errors->has('telefono_contacto') ? ' has-error' : '' }}">
                                                <h2 class="card-inside-title">Teléfono contacto</h2>
                                            <div id="bloodhound">
                                                    <input class="typeahead" name="telefono_contacto" required="" type="text" value="{{$data->telefono_contacto}}">
                                                @if ($errors->has('telefono_contacto'))
                                            <span class="help-block badge col-red">
                                                <strong>{{ $errors->first('telefono_contacto') }}</strong>
                                            </span>
                                        @endif
                                            </div>
                                        </div>
                                    </div>
                            <div class="col-6">
                                <div class="form-group">
                                        <div class="form-group{{ $errors->has('categorias_id') ? ' has-error' : '' }}">
                                        <h2 class="card-inside-title">Categorías</h2>
                                        <select class="form-control form-control-sm" name="categorias_id" id="exampleFormControlSelect3">
                                                <option disabled="" selected="" value="{{$data->id_categoria}}">
                                                    {{$data->categoria}}
                                                </option>
                                                @foreach ($categorias as $data1)
                                                <option value="{{$data1->id}}">
                                                    {{$data1->descripcion}}
                                                </option>
                                                @endforeach
                                            </select>
                                            @if ($errors->has('categorias_id'))
                                            <span class="help-block badge col-red">
                                                <strong>{{ $errors->first('categorias_id') }}</strong>
                                            </span>
                                        @endif
                                        </div>
                                </div>
                            </div>
                            <div class="col-6">
                            <img src={{$data->logo}} alt="" width="100" height="100"/>
                            </div>
                            <div class="col-6">
                                    <img src={{$data->img_fondo}} alt="" width="100" height="100" />
                            </div>
                            <div class="col-6">
                                    <div class="form-group{{ $errors->has('logo') ? ' has-error' : '' }}">
                                 <h2 class="card-inside-title">Logo 70 px Alto 70 px Ancho</h2>
                                <div class="col-sm-12">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file" name="logo">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" name="logo">
                                                @if ($errors->has('logo'))
                                            <span class="help-block badge col-red">
                                                <strong>{{ $errors->first('logo') }}</strong>
                                            </span>
                                        @endif
                                            </div>
                                        </div>
                                </div>
                                    </div>
                            </div>
                    
                    <div class="col-6">
                            <div class="form-group{{ $errors->has('img_fondo') ? ' has-error' : '' }}">
                        <h2 class="card-inside-title">Imagen de fondo 150 px Alto </h2>
                        <div class="col-sm-12">
                                <div class="file-field input-field">
                                    <div class="btn">
                                        <span>File</span>
                                        <input type="file" name="img_fondo">
                                    </div>
                                    <div class="file-path-wrapper">
                                        <input class="file-path validate" type="text" name="img_fondo">
                                        @if ($errors->has('img_fondo'))
                                    <span class="help-block badge col-red">
                                        <strong>{{ $errors->first('img_fondo') }}</strong>
                                    </span>
                                @endif
                                    </div>
                                </div>
                        </div>
                            </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                                <h2 class="card-inside-title">E-commerce</h2>
                                <select class="form-control form-control-sm" name="estado_producto" id="exampleFormControlSelect3">
                                        <option  selected="" value="{{$data->estado_producto}}">
                                            @if ($data->estado_producto==1)
                                        Si
                                    @endif
                                    @if ($data->estado_producto!=1)
                                        No
                                    @endif
                                        </option>
                                        <option value="1">
                                            Si
                                        </option>
                                        <option value="0">
                                            No
                                        </option>
                                    </select>
                        </div>
                    </div>
                            <div class="col-12">
                                    <div class="form-group{{ $errors->has('terminos_condiciones') ? ' has-error' : '' }}">
                                <div class="form-group">
                                        <h2 class="card-inside-title">Descripción</h2>
                                    <textarea class="form-control form-control-sm"  name="terminos_condiciones" rows="5" cols="50">{{ $data->terminos_condiciones }}</textarea>
                                    @if ($errors->has('terminos_condiciones'))
                                    <span class="help-block badge col-red">
                                        <strong>{{ $errors->first('terminos_condiciones') }}</strong>
                                    </span>
                                @endif
                                </div>
                                    </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                    <div class="form-group{{ $errors->has('destacado') ? ' has-error' : '' }}">
                                            <label>
                                                   Destacado
                                                </label>
                                            <select name="destacado" class="form-control form-control-sm" >
                                                <option value="{{$data->destacado}}">
                                                        @if($data->destacado == 1)
                                                        Si
                                                        @endif
                                                        @if($data->destacado != 1)
                                                        No
                                                        @endif
                                                </option>
                                                <option value="1" onclick="habilitaCompras2('cantidad')">Si</option> 
                                                <option value="0" onclick="habilitaCompras('cantidad')">No</option>
                                            </select>
                                            @if ($errors->has('destacado'))
                                            <span class="help-block badge col-red">
                                                <strong>{{ $errors->first('destacado') }}</strong>
                                            </span>
                                            @endif
                                    </div>
                            </div>
                            <div class="col-12">
                                    <img src={{$data->img_destacada}} alt="" width="100" height="100" />
                            </div>
                            <div class="col-12">
                                    <div class="form-group{{ $errors->has('img_destacada') ? ' has-error' : '' }}">
                                <h2 class="card-inside-title">Imagen destacada  200 px Alto </h2>
                                <div class="col-sm-12">
                                        <div class="file-field input-field">
                                                @if ($data->destacado == 1)
                                                <div class="btn">
                                                        <span>File</span>
                                                        <input type="file" name="img_destacada" id="cantidad">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" id="cantidad" name="img_destacada">
                                                        @if ($errors->has('img_destacada'))
                                                    <span class="help-block badge col-red">
                                                        <strong>{{ $errors->first('img_destacada') }}</strong>
                                                    </span>
                                                @endif
                                                    </div>
                                                @endif
                                                @if($data->destacado != 1)
                                                <div class="btn">
                                                        <span>File</span>
                                                        <input type="file" name="img_destacada" id="cantidad">
                                                    </div>
                                                    <div class="file-path-wrapper">
                                                        <input class="file-path validate" type="text" id="cantidad" name="img_destacada" disabled="true">
                                                        @if ($errors->has('img_destacada'))
                                                    <span class="help-block badge col-red">
                                                        <strong>{{ $errors->first('img_destacada') }}</strong>
                                                    </span>
                                                @endif
                                                    </div>
                                                @endif
                                            
                                        </div>
                                </div>
                                    </div>
                            </div>
                        <div class="col-12">
                            
                            <div id="bloodhound">
                                <input class="btn btn-success" name="actualizar"  type="submit" value="Actualizar">
                                
                            </div>
                           
                               
                           
                        </div>

                    </div>
                    </form>
                </div>
            </div>
            <div class="row  mr-2" style="justify-content: flex-end ;">
                    <a class="btn btn-info pt-2" href="{{route('volverestablecimientos')}}"  >Volver</a>
                                    
                                </div>
    
@endforeach
@endsection
@section('script')
<script>
        function habilitaCompras(campoCantidad)
        {
            var estadoActual = document.getElementById(campoCantidad);
        
            estadoActual.disabled = true;
        }
        </script>
        <script>
                function habilitaCompras2(!campoCantidad)
                {
                    var estadoActual = document.getElementById(campoCantidad);
                
                    estadoActual.disabled = false;
                }
                </script>
@endsection