@extends('layouts.menu')

@section('contenido')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @foreach ($empresa as $data)
            <div class="row grid-margin">
                <img alt="logo {{$data->nombre}}" class="img-lg rounded-circle" src="{{$data->logo}}" style="width: 50px; height: 50px; margin-right: 10px;"/>
                <h1 class="title center">
                    {{$data->nombre}}
                </h1>
            </div>
            @endforeach
            
            <h5>
                Historial de peticiones de recarga
            </h5>
            <div class="table-responsive">
                <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Fecha
                        </th>
                        <th>
                            id
                        </th>
                        <th>
                            Valor Solicitado
                        </th>
                        <th>
                            Valor Actual
                        </th>
                        <th>
                            Leido
                        </th>
                        <th>
                            Aprobado
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peticiones as $data)
                    <tr>
                        <td>
                            {{$data->created_at}}
                        </td>
                        <td>
                            {{$data->id}}
                        </td>
                        <td>
                            {{$data->valor_solicitado}}
                        </td>
                        <td>
                            {{$data->valor_actual_monto}}
                        </td>
                        <td>
                            @if ($data->leido == 1)
                                leido
                            @endif
                            @if ($data->leido != 1)
                                Sin Leer
                            @endif
                        </td>
                        <td>
                            @if ($data->aceptado == 2)
                                Rechazado
                            @endif
                            @if ($data->aceptado == 1)
                            Aceptado
                            @endif
                            @if ($data->aceptado == 0)
                            Sin aprobar
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            </div>
        </div>
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

