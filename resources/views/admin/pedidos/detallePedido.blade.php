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
                                <h4 class="card-title">Pedido N° {{ $pedido[0]->id }}</h4>
                            </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h5>Información del Pedido</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" value="{{ $pedido[0]->name }}" disabled>
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Apellido</label>
                                                    <input type="text" class="form-control" value="{{ $pedido[0]->apellido }}" disabled>
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="text" class="form-control" value="{{ $pedido[0]->telefono }}" disabled>
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label>DNI</label>
                                                    <input type="text" class="form-control" value="{{ $pedido[0]->rut }}" disabled>
                                                </fieldset>
                                            </div>
                                            <div class="col-8">
                                                <fieldset class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control" value="{{ $pedido[0]->direccion }}" disabled>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>

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
                                                            <th>Cantidad</th>
                                                            <th>Sub-total</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody>
                                                    @foreach ($lista_pedido as $item)
                                                        <tr>
                                                            <td>{{$item->nombre}}</td>
                                                            <td>{{$item->cantidad}} {{ $item->medida }}</td>
                                                            <td>${{$item->precio / $item->cantidad}}</td>
                                                            <td>${{$item->precio}}</td>


                                                        </tr>
                                                    @endforeach
                                                    </tbody>

                                                    <tfoot>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Cantidad</th>
                                                            <th>Sub-total</th>
                                                            <th>Total</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                                <h3 class="mx-1 font-weight-bold"><span class="text-success">Total: ${{ $total_pedido }}</span></h3>
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