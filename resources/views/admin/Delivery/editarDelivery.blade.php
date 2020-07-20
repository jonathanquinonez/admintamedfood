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
                                <h4 class="card-title">Detalle del Delivery</h4>
                            </div>
                            <form method="POST" action="#">
                                {{ csrf_field() }}
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h5>Información</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control {{ $errors->has('name') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->name }}" name="name">
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
                                                    <input type="text" class="form-control {{ $errors->has('apellido') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->apellido }}" name="apellido_usuario">
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
                                                    <input type="text" class="form-control {{ $errors->has('telefono_usuario') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->telefono }}" name="telefono_usuario">
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
                                                    <input type="text" class="form-control {{ $errors->has('identificacion') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->identificacion }}" name="identificacion">
                                                    @if ($errors->has('identificacion'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('identificacion') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-4">
                                                <fieldset class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control {{ $errors->has('direccion_user') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->direccion_user }}" name="direccion_user">
                                                    @if ($errors->has('direccion_user'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('direccion_user') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-4">
                                                <fieldset class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control {{ $errors->has('detalle_direccion') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->detalle_direccion }}" name="detalle_direccion">
                                                    @if ($errors->has('detalle_direccion'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('detalle_direccion') }}</strong>
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
                                <h4 class="card-title">Detalle de sus Pedidos</h4>
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
                                                            <th>Apellido</th>
                                                            <th>Telefono</th>
                                                            <th>Direccion</th>
                                                            <th>Detalle Dirección</th>
                                                            <th>Imagen</th>
                                                            <th>Total</th>
                                                            <th>Fecha de pedido</th>
                                                            <th>Estado</th>
                                                            <th>Ver</th>
                                                        </tr>
                                                    </thead>
                                                <tbody>
                                                    @foreach ($dataPedidos as $item)
                                                    <tr>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->apellido}}</td>
                                                        <td>{{$item->telefono}}</td>
                                                        <td>{{$item->direccion}}</td>
                                                        <td>{{$item->detalle_direccion}}</td>
                                                         <td><img height="50" width="50" src="{{$item->img_perfil}}"></td>
                                                        <td>{{$item->total}}</td>
                                                        <td>{{$item->fecha_pedido}}</td>
                                                        <td>
                                                            @if ($item->nombre_estado == 1)
                                                                <div class="badge badge-success">Activo</div>
                                                            @endif
              
                                                            @if ($item->nombre_estado != 1)
                                                            <div class="badge badge-danger">INACTIVO</div>
                                                            @endif
                                                            <td>
                                                              <a type="button" href="{{route('detallePedido',[$item->id])}}" class="btn btn-success mr-1 mb-1"><i class="feather icon-check-square"></i> Ver</button>
                                                              </td>
                                                        </td>
                                                    </tr>
                                                    @endforeach 
                                                </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Apellido</th>
                                                            <th>Telefono</th>
                                                            <th>Dirección</th>
                                                            <th>Detalle Dirección</th>
                                                            <th>Imagen</th>
                                                            <th>Total</th>
                                                            <th>Fecha de pedido</th>
                                                            <th>Estado</th>
                                                            <th>Ver</th>
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