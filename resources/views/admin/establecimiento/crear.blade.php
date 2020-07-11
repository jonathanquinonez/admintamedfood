@extends('layouts.menu')
@section('contenido') 
           <h2 class="title"> Crear establecimiento</h2>
            <div class="modal-body">
                <div class="form-group row">
                    <form action="{{ url('crearestablecimiento') }}" enctype="multipart/form-data" method="POST" autocomplete="off">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-6">
                                <h2 class="card-inside-title">Nombre</h2>
                            <div id="the-basics">
                                <input class="typeahead" autocomplete="off" value="{{ old('nombre') }}" placeholder="Nombre" name="nombre"  required="" type="text" value="">

                                <input class="typeahead" name="id"  hidden="" type="text" value="">

                            </div>
                        </div>
                        <div class="col-6">
                                <div class="form-group{{ $errors->has('codigo_unico') ? ' has-error' : '' }}">
                                        <h2 class="card-inside-title">Código único</h2>
                                    <div id="the-basics">
                                        <input class="typeahead" autocomplete="off" placeholder="Codigo unico"  name="codigo_unico"  required="" type="text" value="{{ old('codigo_unico') }}">
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
                                <input class="typeahead" autocomplete="off" value="{{ old('razon_social') }}" placeholder="Razon Social" name="razon_social"  required="" type="text" value="">
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
                                            <input class="typeahead" placeholder="Nit" autocomplete="off" name="nit"  required="" type="text" value="{{ old('nit') }}">
                                            @if ($errors->has('nit'))
                                            <span class="help-block badge col-red">
                                                <strong>{{ $errors->first('nit') }}</strong>
                                            </span>
                                        @endif

                                        </div>
                                    </div>
                            </div>
                      
                        <div class="col-6">
                                <h2 class="card-inside-title">Descripción</h2>
                            <div id="the-basics">
                                <input class="typeahead" placeholder="Descripción" value="{{ old('direccion') }}" autocomplete="off" name="direccion" required="" type="text" value="">
                                
                            </div>
                        </div>

                        <div class="col-6">
                                <h2 class="card-inside-title">Ciudad</h2>
                                <input class="typeahead" name="ciudad"  autocomplete="off" value="{{ old('ciudad') }}" list="n" placeholder="Ciudad">
                                <datalist id="n">
                                        @foreach ($ciudad as $item)
                                        <option value="{{$item->descripcion}}">{{$item->descripcion}}</option>
                                        @endforeach
                                </datalist> 
                        </div>
                        <div class="col-6">
                                <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                                        <h2 class="card-inside-title">Correo</h2>
                                    <div id="bloodhound">
                                        <input class="typeahead" name="correo" placeholder="Correo" required="" type="email" value="{{ old('correo') }}">
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
                                    <input class="typeahead" name="nombre_contacto" placeholder="Persona de contacto" required="" type="text" value="{{ old('nombre_contacto') }}">
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
                                            <input class="typeahead" name="telefono_contacto" placeholder="Telefono contacto" required="" type="text" value="{{ old('telefono_contacto') }}">
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
                                    <h2 class="card-inside-title">Categorías</h2>
                                <select class="form-control form-control-sm" placeholder="Categoría" name="categorias_id" id="exampleFormControlSelect3">
                                    
                                    @foreach ($categorias as $data1)
                                    <option value="{{$data1->id}}">
                                        {{$data1->descripcion}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
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
                        <select class="form-control form-control-sm"  name="estado_producto" id="exampleFormControlSelect3">
                           
                            <option value="0">
                                No
                            </option>
                            <option value="1">
                                Si
                            </option>
                        </select>
                    </div>
                </div>
                        <div class="col-12">
                                <div class="form-group{{ $errors->has('terminos_condiciones') ? ' has-error' : '' }}">
                            <div class="form-group">
                                    <h2 class="card-inside-title">Descripción</h2>
                                <textarea class="form-control form-control-sm"  name="terminos_condiciones" rows="5" cols="50">{{ old('terminos_condiciones') }}</textarea>
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
                                <p>
                                    <label>
                                        <input type="checkbox" name="destacado" onclick="habilitaCompras('cantidad')"/>
                                        <span>Destacar</span>
                                        @if ($errors->has('destacado'))
                                        <span class="help-block badge col-red">
                                            <strong>{{ $errors->first('destacado') }}</strong>
                                        </span>
                                    @endif
                                    </label>
                                </p>
                                </div>
                        </div>
                          
                <div class="col-12">
                        <div class="form-group{{ $errors->has('img_destacada') ? ' has-error' : '' }}">
                    <h2 class="card-inside-title">Imagen destacada 200 px Alto </h2>
                    <div class="col-sm-12">
                            <div class="file-field input-field">
                                <div class="btn">
                                    <span>File</span>
                                    <input type="file" name="img_destacada" id="cantidad" disabled="true">
                                </div>
                                <div class="file-path-wrapper">
                                    <input class="file-path validate" type="text" id="cantidad" name="img_destacada" disabled="true">
                                    @if ($errors->has('img_destacada'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('img_destacada') }}</strong>
                                </span>
                            @endif
                                </div>
                            </div>
                    </div>
                        </div>
                </div>
                        <div class="col-12 mt-5">
                            
                           
                                <input class="btn btn-success" name="actualizar"  type="submit" value="Crear">
                                
                        </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="row  mr-2" style="justify-content: flex-end ;">
            <a class="btn btn-info pt-2" href="{{route('volverestablecimientos')}}"  >Volver</a>
                            
                        </div>
@endsection
@section('script')
   <script>
    function habilitaCompras(campoCantidad)
    {
        var estadoActual = document.getElementById(campoCantidad);
    
        estadoActual.disabled = !estadoActual.disabled;
    }
    </script>
@endsection
