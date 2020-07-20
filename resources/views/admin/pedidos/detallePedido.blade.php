@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/colors.css')}}">
@endsection


@section('contenido')

    <div class="content-wrapper">
        <div class="content-body">
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Detalle del Pedido</h4>
                            </div>
                            <form method="POST" action="#">
                                {{ csrf_field() }}
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h5>Información del Productor</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control {{ $errors->has('name') ? ' has-error' : '' }}" required="" value="{{ old('name') }}" name="name">
                                                    @if ($errors->has('name'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Apellido</label>
                                                    <input type="text" class="form-control {{ $errors->has('apellido_usuario') ? ' has-error' : '' }}" required="" value="{{ old('apellido_usuario') }}" name="apellido_usuario">
                                                    @if ($errors->has('apellido_usuario'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('apellido_usuario') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="text" class="form-control {{ $errors->has('telefono_usuario') ? ' has-error' : '' }}" required="" value="{{ old('telefono_usuario') }}" name="telefono_usuario">
                                                    @if ($errors->has('telefono_usuario'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('telefono_usuario') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label>DNI</label>
                                                    <input type="text" class="form-control {{ $errors->has('dni_usuario') ? ' has-error' : '' }}" required="" value="{{ old('dni_usuario') }}" name="dni_usuario">
                                                    @if ($errors->has('dni_usuario'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('dni_usuario') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-8">
                                                <fieldset class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control {{ $errors->has('direccion_usuario') ? ' has-error' : '' }}" required="" value="{{ old('direccion_usuario') }}" name="direccion_usuario">
                                                    @if ($errors->has('direccion_usuario'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('direccion_usuario') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Actualizar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Detalle de sus pedidos</h4>
                            </div>
                          
                              
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        {{-- <h5>Información del Productor</h5> --}}
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table table-striped dataex-html5-selectors">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Stock</th>
                                                            <th>Medida</th>
                                                            <th>Categoria</th>
                                                        </tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                      
                                                       <tr>
                                                       
                                                    </tr>
                                                       
                                                 </tbody>
                    
                                                    <tfoot>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Stock</th>
                                                            <th>Medida</th>
                                                            <th>Categoria</th>
                                                            
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

@section('script')
    <script src="{{URL::asset('app-assets/js/scripts/datatables/datatable.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/vfs_fonts.')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
@endsection