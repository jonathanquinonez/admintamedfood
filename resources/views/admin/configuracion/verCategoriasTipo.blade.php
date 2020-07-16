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
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        
                        <div class="table-responsive">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Estado</th>
                                        <th>Habilitar/Inhabilitar</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                   @foreach ($dataConfiguracion as $item)
                                   <tr>
                                   <td>{{$item->nombre}}</td>
                                   <td><img height="50" width="50" src="{{$item->img}}"></td>
                                   <td>
                                    @if($item->estado == 1)
                                    <div class="badge badge-secondary">Habilitado</div>
                                    @endif
                                    @if($item->estado != 1)
                                    <div class="badge badge-secondary">Inhabilitado</div>
                                    @endif
                                    </td>
                                   <td>
                                    @if($item->estado == 1)
                                   <a href="{{route('actualizarEstadoCategoriaTipo',[$item->id,$item->estado])}}">
                                    <div class="badge badge-danger">Inhabilitado</div>
                                    </a>
                                    @endif
                                    @if($item->estado != 1)
                                <a href="{{route('actualizarEstadoCategoriaTipo',[$item->id,$item->estado])}}">
                                    <div class="badge badge-success">Habilitado</div>
                                    </a>
                                    @endif
                                    </td>
                                </tr>
                                   @endforeach   
                             </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Imagen</th>
                                        <th>Estado</th>
                                        <th>Habilitar/Inhabilitar</th>
                                    </tr>
                                </tfoot>
                            </table>
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
