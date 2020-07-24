@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/colors.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/vendors/css/forms/select/select2.min.css')}}">
@endsection


@section('contenido')

    <div class="content-wrapper">
        <div class="content-body">
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Crear Producto</h4>
                            </div>
                            <form method="POST" action="{{ route('crearProductoo') }}">
                                {{ csrf_field() }}
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h5>Datos del productor</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">Productor</label>
                                                    <div class="form-group" data-select2-id="126">
                                                        <select class="select2 form-control select2-hidden-accessible" data-select2-id="2" tabindex="-2" aria-hidden="true" name="productor_id">
                                                            @foreach($lista_productores as $productores)
                                                                <option value="{{ $productores->id }}">{{ $productores->name }} {{ $productores->apellido }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h5>Información del producto</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Nombre Del Producto</label>
                                                    <input type="text" class="form-control" value="{{ old('nombre') }}" name="nombre">
                                                    @if ($errors->has('nombre'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('nombre') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Stock</label>
                                                    <input type="text" class="form-control" value="{{ old('stock') }}" name="stock">
                                                    @if ($errors->has('stock'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('stock') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Precio</label>
                                                    <input type="text" class="form-control" value="{{ old('precio') }}" name="precio">
                                                    @if ($errors->has('precio'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('precio') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label>Unidad De Medida</label>
                                                    <input type="text" class="form-control" value="{{ old('medida') }}" name="medida">
                                                    @if ($errors->has('medida'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('medida') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>

                                            
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">Categoria Producto</label>
                                                    <div class="form-group" data-select2-id="126">
                                                        <select class="select2 form-control select2-hidden-accessible" data-select2-id="3" tabindex="-3" aria-hidden="true" name="categoria_tipo_id">
                                                            @foreach($lista_categoriaTipo as $tipos)
                                                                <option value="{{ $tipos->id }}">{{ $tipos->nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>   

                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">Categoria Nutricional</label>
                                                    <div class="form-group" data-select2-id="126">
                                                        <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true" name="categoria_nutricional_id">
                                                            @foreach($lista_categoriaNutricion as $nutricion)
                                                                <option value="{{ $nutricion->id }}">{{ $nutricion->nombre }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </fieldset>
                                            </div>                                                              
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Guardar</button>
                                                <a href="{{ url()->previous() }}" class="btn btn-danger waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Cancelar</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

@section('script')
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

    <script src="{{URL::asset('app-assets/js/scripts/datatables/datatable.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/vfs_fonts.')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>
@endsection