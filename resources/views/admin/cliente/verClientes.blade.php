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
                    <h4 class="card-title">Clientes</h4>
                    <div>
                        <a href="{{route('crearViewCliente')}}" class="btn btn-success waves-effect waves-light"><i class="feather icon-check-square"></i>&nbsp; Nuevo</a>
                    </div>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        
                        <div class="table-responsive">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Teléfono</th>
                                        <th>Rut</th>
                                        <th>Imagen</th>
                                        <th>Verificado</th>
                                        <th>Suscripcion</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                   @foreach ($dataCliente as $item)
                                   <tr>
                                        <td>{{$item->name}}</td>
                                        <td>{{$item->apellido}}</td>
                                        <td>{{$item->telefono}}</td>
                                        <td>{{$item->rut}}</td>
                                        <td><img height="50" width="50" src="{{$item->img_perfil}}"></td>
                                        <td>
                                            @if($item->verificado)
                                                <div class="badge badge-success">Si</div>
                                            @else
                                                <div class="badge badge-warning">No</div>
                                            @endif
                                        </td>
                                        <td>
                                           @if($item->suscripcion_id)
                                                <div class="badge badge-success">Si</div>
                                           @else
                                                <div class="badge badge-warning">No</div>
                                           @endif
                                        </td>
                                        <td>
                                            <a href="{{route('editarViewCliente', $item->id)}}" class="btn btn-sm btn-success waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Ver</a>
                                            <a href="{{route('editarViewCliente', $item->id)}}" class="btn btn-sm btn-danger waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Borrar</a>
                                        </td>
                                    </tr>
                                   @endforeach   
                             </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Teléfono</th>
                                        <th>Rut</th>
                                        <th>Imagen</th>
                                        <th>Verificado</th>
                                        <th>Suscripcion</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>

                            {{ $dataCliente->links() }}
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
