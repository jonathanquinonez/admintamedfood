@extends('layouts.menu')
@section('contenido')
@foreach ($empresas as $data)
<div class="row grid-margin">
    <img alt="logo {{$data->nombre}}" class="img-lg rounded-circle" src="{{$data->logo}}" style="width: 50px; height: 50px; margin-right: 10px;"/>
    <h1 class="title center">
        {{$data->nombre}}
    </h1>
</div>

<div class="card">
    <div class="card-body">
        <div class="col-12">
            <div class="row template-demo" style="justify-content: flex-end !important; margin-bottom: 10px;">
                <div style="justify-content: flex-end !important; ">
                    {{-- <button class="btn btn-primary btn-fw" type="button">
                        <i class="mdi mdi-cloud-download">
                        </i>
                        Carga masiva de empleados
                    </button> --}}
                    <a href="{{ route('modalcrearempleado',[$data->id]) }}"><button class="btn btn-info btn-fw" type="button">
                        <i class="mdi mdi-cloud-download">
                        </i>
                        Crear Empleado
                    </button></a>
                </div>
            </div>
            @endforeach
            <div class="table-responsive">
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Cedula
                        </th>
                        <th>
                            Correo
                        </th>
                        <th>
                            Estado
                        </th>
                        <th>
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $data)
                    <tr>
                        <td>
                            {{ucwords($data->nombre)}}
                        </td>
                        <td>
                            {{$data->cedula}}
                        </td>
                        <td>
                            {{$data->email}}
                        </td>
                        <td>
                            @if($data->bloqueo == 0)
                        		Activo
                        	@endif
                        	@if ($data->bloqueo != 0 )
                        		Bloqueado
                        	@endif
                        </td>
                        <td>
                            <label class="badge badge-success">
                                <i class="fa fa-eye">
                                </i>
                            </label>
                            <label class="badge badge-primary">
                                <i class="fa fa-pencil">
                                </i>
                            </label>
                            <label class="badge badge-warning">
                                <i class="fa fa-id-card">
                                </i>
                            </label>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    </div>
</div>
@endsection
 @section('script')
 <script src="{{URL::asset('assets/js/table.min.js')}}"></script>
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/dataTables.buttons.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/jszip.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script> --}}
    <script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection
