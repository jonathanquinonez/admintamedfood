@extends('layouts.menu')

@section('contenido')
<h1>
    Usuarios App Movil.
</h3>
<div class="card">
    <div class="card-body">
            <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-right: 10px;">
                    <a   href="{{ route('AlluserPDF') }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
                    <a   href="{{ route('usersexcel') }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                    
                </div>
                
        <div class="table-responsive">
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                           D.I.
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Correo
                        </th>
                        <th>
                            Celular
                        </th>
                        <th>
                                Entidad
                        </th>
                        <th>
                            Estado
                        </th>
                        <th>
                            Ver
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $data)
                    <tr>
                        <td>
                            {{$data->id}}
                        </td>
                        <td>
                            {{$data->cedula}}
                        </td>
                        <td>
                            {{$data->nombre}}
                        </td>
                        <td>
                            {{ucwords($data->email)}}
                        </td>
                        <td>
                            {{$data->celular}}
                        </td>
                        <td>
                            {{ucwords($data->nombre_empresa)}}
                        </td>
                        <td>
                            @if($data->bloqueo == 0)
                            Activo
                            @endif
                            @if ($data->bloqueo == 1)
                            Bloqueado
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('user',[$data->id,2]) }}">
                                <label class="badge badge-info">
                                    Ver
                                </label>
                            </a>
                            <a href="{{ route('editarcorreousuarioform',[$data->id]) }}">
                                <label class="badge badge-info">
                                    Editar correo
                                </label>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                            <th>
                                    Id
                                </th>
                        <th>
                           D.I.
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Correo
                        </th>
                        <th>
                            Celular
                        </th>
                        <th>
                                Entidad
                        </th>
                        <th>
                            Estado
                        </th>
                        <th>
                            Ver
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
@endsection
@section('script')

    <script src="{{URL::asset('assets/js/table.min.js')}}"></script>
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script> 
    <script src="{{URL::asset('assets/js/bundles/export-tables/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script> --}}
    <script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>

@endsection
