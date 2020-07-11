@extends('layouts.menu')

@section('contenido')
    @foreach($sucursal as $datasucursal)
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">


                    <h4 class="card-title">
                       Transacciones  "{{$datasucursal->nombre}}"
                    </h4>
                   <div class="table-responsive">
                        <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-left: 10px;">
                                <a   href="{{ route('SucursalesTransaccionesPDF',[$datasucursal->id]) }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
                                <a   href="{{ route('SucursalesTransaccionesexcel',[$datasucursal->id]) }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                                
                            </div>
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                        <thead>
                        <tr>
                            <th>
                                Fecha / Hora
                            </th>
                            <th>
                                D.I.
                            </th>
                            <th>
                                Empleado
                            </th>
                            <th>
                               Entidad
                            </th>
                            <th>
                                N. Transacción
                            </th>
                            <th>
                                Establecimiento
                            </th>
                            <th>
                                Sucursal
                            </th>
                            <th>
                                Total
                            </th>
                            <th>
                            Detalle
                        </th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($transacciones as $venta)
                            {{-- expr --}}

                            <tr>
                                <td>
                                    {{ $venta->created_at }}
                                </td>
                                <td>
                                    {{$venta->cedula}}
                                </td>
                                <td>
                                    {{$venta->nombreEmpleado}}
                                </td>
                                <td>
                                    {{$venta->nombre_empresa}}
                                </td>
                                <td>
                                    {{$venta->id}}
                                </td>
                                <td>
                                    {{$venta->nombre_establecimiento}}
                                </td>
                                <td>
                                    {{$venta->nombre_sucursal}}
                                </td>
                                <td>
                                    {{ number_format($venta->total,2) }}
                                </td>
                                 <td>
                             <a href="{{route('detallefactura',[$venta->id,3])}}">
                             <button class="btn-xs btn-primary"><i class="fa fa-eye"></i></button>
                             </a>
                        </td>

                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>
                                Fecha / Hora
                            </th>
                            <th>
                                D.I.
                            </th>
                            <th>
                                Empleado
                            </th>
                            <th>
                                    Entidad
                            </th>
                            <th>
                                N. Transacción
                            </th>
                            <th>
                                Establecimiento
                            </th>
                            <th>
                                Sucursal
                            </th>
                            <th>
                                Total
                            </th>
                            <th>
                            Detalle
                        </th>

                        </tr>
                        </tfoot>
                    </table>
</div>
<div class="row  mr-2" style="justify-content: flex-start ;">
<h4>Total: {{number_format($total,2)}}</h4>
                        
                    </div>
<div class="row  mr-2" style="justify-content: flex-end ;">
        <a class="btn btn-info pt-2" href="{{route('volverestablecimiento',[$id_establecimiento])}}"  >Volver</a>
                        
                    </div>
            </div>
        </div>
    </div>
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
 
