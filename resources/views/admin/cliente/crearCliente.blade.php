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
                                <h4 class="card-title">Crear Clientes</h4>
                            </div>
                            <form method="POST" action="{{ route('crearCliente') }}">
                                {{ csrf_field() }}
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h5>Datos de usuario</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label>Correo</label>
                                                    <input type="text" class="form-control {{ $errors->has('email') ? ' has-error' : '' }}" required="" value="{{ old('email') }}" name="email">
                                                    @if ($errors->has('email'))
                                                        <span class="help-block badge bg-danger">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label>Contraseña</label>
                                                    <input type="password" class="form-control {{ $errors->has('password') ? ' has-error' : '' }}" required="" value="{{ old('password') }}" name="password">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h5>Información del cliente</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">Foto</label>
                                                    <div class="custom-file">
                                                        <input name="img_perfil" type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01"></label>
                                                    </div>
                                                </fieldset>
                                            </div>
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
                                                    <input type="text" class="form-control {{ $errors->has('apellido') ? ' has-error' : '' }}" required="" value="{{ old('apellido') }}" name="apellido">
                                                    @if ($errors->has('apellido'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('apellido') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="text" class="form-control {{ $errors->has('telefono') ? ' has-error' : '' }}" required="" value="{{ old('telefono') }}" name="telefono">
                                                    @if ($errors->has('telefono'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('telefono') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label>DNI</label>
                                                    <input type="text" class="form-control {{ $errors->has('rut') ? ' has-error' : '' }}" required="" value="{{ old('rut') }}" name="rut">
                                                    @if ($errors->has('rut'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('rut') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <fieldset class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control {{ $errors->has('direccion') ? ' has-error' : '' }}" required="" value="{{ old('direccion') }}" name="direccion">
                                                    @if ($errors->has('direccion'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('direccion') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Guardar</button>
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