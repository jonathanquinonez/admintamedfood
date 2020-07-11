@extends('layouts.menu')
@section('contenido')
@foreach ($empresas as $data)
<div class="row grid-margin">
    <h1 class="title center ml-3">
        {{$data->nombre}}
    </h1>
</div>
<br>
<h3 class="title">Listado de peticiones</h3>

<div>
    <div >
        <div >
              <div class="table-responsive">
                    <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-left: 10px;">
                            <a   href="{{ route('AllEmpresasPeticionesPDF',[$data->id]) }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
                            <a   href="{{ route('EmpresaPeticionesExport',[$data->id]) }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                            
                        </div>

<table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                             Id
                        </th>
                        <th>
                             Nombre
                        </th>
                        <th>
                             D.I.
                        </th>
                        <th>
                            Valor solicitado
                        </th>
                        <th>
                            Valor Actual
                        </th>
                        <th>
                            Descripción
                        </th>
                        <th>
                            Estado
                        </th>
                         <th>
                            Detalle
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peticiones as $datap)
                    <tr>
                        <td>
                            {{$datap->id}}
                        </td>
                        <td>
                            {{ucwords($datap->nombre_usuario)}}
                        </td>
                        <td>
                            {{$datap->cedula}}
                        </td>
                        <td>
                            {{number_format($datap->valor_solicitado,2)}}
                        </td>
                        <td>
                            {{number_format($datap->valor_actual_monto,2)}}
                        </td>
                        <td>
                            {{$datap->descripcion}}
                        </td>
                        <td>
                             @if ($datap->aceptado == 2)
                                Rechazado
                            @endif
                            @if ($datap->aceptado == 1)
                            Aceptado
                            @endif
                            @if ($datap->aceptado == 0)
                            Sin aprobar
                            @endif
                        </td>
                        <td>
                            
                             <a  href="{{ route('detallepeticion',[$datap->id]) }}"><label class="badge btn-primary"><i class="fa fas fa-eye"></i></label></a>

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
                             Nombre
                        </th>
                        <th>
                             D.I.
                        </th>
                        <th>
                            Valor solicitado
                        </th>
                        <th>
                            Valor Actual
                        </th>
                        <th>
                            Descripción
                        </th>
                        <th>
                               Estado
                            </th>
                         <th>
                            Detalle
                        </th>
                    </tr>
        </tfoot>
            </table>
        </div>
        </div>
    </div>
    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    </div>
</div>
<div class="row  mr-2" style="justify-content: flex-end ;">
        <a class="btn btn-info pt-2" href="{{route('empresadetalle',[$data->id])}}"  >Volver</a>
                        
                    </div>
                    @endforeach
@endsection
 @section('script')
  <script src="{{URL::asset('assets/js/table.min.js')}}"></script>
    {{-- <script src="{{URL::asset('assets/js/bundles}/export-tables/dataTables.buttons.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/jszip.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script> --}}
    <script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>
@endsection
