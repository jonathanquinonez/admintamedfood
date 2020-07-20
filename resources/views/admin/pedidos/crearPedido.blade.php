@extends('layouts.menu')

@section('css')


    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/colors.css')}}">
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
                                <h4 class="card-title">Crear Pedido</h4>
                            </div>
                            <form method="POST" action="#">
                                {{ csrf_field() }}
                                
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h5>Información del Pedido</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">Cliente</label>
                                                    <div class="form-group" data-select2-id="126">
                                                        <select class="select2 form-control select2-hidden-accessible" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                                            @foreach($lista_clientes as $cliente)
                                                            <option value="{{ $cliente->id }}">{{ $cliente->name }} {{ $cliente->apellido }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
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
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Detalle de sus pedidos</h4>
                                <button class="btn-icon btn btn-primary btn-round btn-sm" type="button">
                                    <i class="feather icon-plus"></i> Nuevo aritculo
                                </button>
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
                                                    <tr></tr>
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
                                            <h3 class="mx-1 font-weight-bold"><span class="text-success">Total: $0</span></h3>
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
    <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

    <script src="{{URL::asset('assets/app-assets/js/scripts/datatables/datatable.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/vendors/js/tables/datatable/vfs_fonts.')}}"></script>
    <script src="{{URL::asset('assets/app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>
    <script src="{{URL::asset('assets/app-assets/js/scripts/forms/select/form-select2.js')}}"></script>
@endsection