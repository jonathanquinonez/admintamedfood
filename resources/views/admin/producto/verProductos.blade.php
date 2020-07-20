@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/colors.css')}}">
@endsection


@section('contenido')

    <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Productos</h4>
                                <div class="d-flex flex-row">
                                    <form method="GET" action="{{ route('verProductos') }}">
                                        <fieldset class="mr-1">
                                            <div class="input-group">
                                                <input name="buscador" {{ old("buscador") }} type="text" class="form-control" placeholder="Nombre, Rut" aria-describedby="button-addon2">
                                                <div class="input-group-append" id="button-addon2">
                                                    <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                        <i class="feather icon-search"></i>
                                                    </button>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </form>
                                    <a href="{{route('crearViewProducto')}}" class="btn btn-success waves-effect waves-light"><i class="feather icon-check-square"></i>&nbsp; Nuevo</a>
                                </div>
                            </div>
                            <div class="card-content">
                                <div class="card-body card-dashboard">

                                    <div class="table-responsive">
                                        <table class="table table-striped dataex-html5-selectors">
                                            <thead>
                                                <tr>
                                                    <th>Nombre producto</th>
                                                    <th>Stock</th>
                                                    <th>Unidad medida</th>
                                                    <th>Precio</th>
                                                    <th>Categoria producto</th>
                                                    <th>Categoria nutricional</th>
                                                    <th>Productor</th>
                                                    <th></th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                            @foreach ($dataProductos as $item)
                                                <tr>
                                                    <td>{{$item->nombre}}</td>
                                                    <td>{{$item->stock}}</td>
                                                    <td>{{$item->medida}}</td>
                                                    <td>{{$item->precio}}</td>
                                                    <td>{{$item->categoria_producto}}</td>
                                                    <td>{{$item->categoria_nutricional}}</td>
                                                    <td>{{$item->name}} {{$item->apellido}}</td>
                                                    <td>
                                                        <a href="{{route('verDetalleProducto', $item->id)}}" class="btn btn-sm btn-success waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Ver</a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <th>Nombre producto</th>
                                                    <th>Stock</th>
                                                    <th>Unidad medida</th>
                                                    <th>Precio</th>
                                                    <th>Categoria producto</th>
                                                    <th>Categoria nutricional</th>
                                                    <th>Productor</th>
                                                    <th></th>
                                                </tr>
                                            </tfoot>
                                        </table>

                                        {{ $dataProductos->links() }}
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
