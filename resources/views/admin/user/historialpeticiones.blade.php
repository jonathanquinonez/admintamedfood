@extends('layouts.menu')

@section('contenido')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h5>
                Historial de peticiones de recarga
            </h5>
            @foreach ($users as $data)
            <h2 class="card-title">
                {{$data->nombre}} - {{$data->nombre_empresa}}
            </h2>
           
           
            
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
                        <th>
                            Ver
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peticion as $data)
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
                            @if ($data->aceptado == 1)
                        		Aprobado
                        	@endif
                        	@if ($data->aceptado != 1)
                        		@if($data->leido != 1)
                        		En espera
								@endif
								@if ($data->leido == 1)
									Rechazado
								@endif

                        	@endif
                        </td>
                         <td>
                             <a href="{{ route('detallepeticion',[$data->id]) }}">
                                <label class="badge badge-info">
                                    Ver
                                </label>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        </div>
    </div>
</div>
{{-- <div class="row  mr-2" style="justify-content: flex-end ;">
        <a class="btn btn-info pt-2" href="{{route('empresadetalle',[$data->id])}}"  >Volver</a>
                        
                    </div> --}}
                    @endforeach   
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
