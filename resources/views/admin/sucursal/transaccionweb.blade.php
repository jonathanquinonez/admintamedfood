@extends('layouts.menu')

@section('contenido')
    @foreach($establecimiento as $data)
    <div class="col-md-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">


                    <h2 class="title">
                       Establecimiento  "{{$data->nombre}}"
                    </h2>
                    <span>Transacciones web</span>
                   <div class="table-responsive">
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                        <thead>
                        <tr>
                            <th>
                                Fecha
                            </th>
                            <th>
                                CC empleado
                            </th>
                            <th>
                               Empresa
                            </th>
                            <th>
                                N. Transacción
                            </th>
                            
                            <th>
                                Sucursal
                            </th>

                            <th>
                                Cuotas
                            </th>
                            <th>
                                Costo Cuota
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
                                    {{$venta->nombre_empresa}}
                                </td>
                                <td>
                                    {{$venta->id}}
                                </td>
                                
                                <td>
                                    {{$venta->nombre_sucursal}}
                                </td>

                                <td>
                                    {{$venta->cantidad_cuota}}
                                </td>
                                <td>
                                    {{number_format($venta->valor_cuota,2)}}
                                </td>
                                <td>
                                    {{ number_format($venta->total,2) }}
                                </td>
                                 <td>
                             <a href="{{route('detallefactura',[$venta->id])}}">
                             <button class="btn-xs btn-primary"><i class="fa fa-eye"></i></button>
                             </a>
                        </td>

                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                            <th>
                                Fecha
                            </th>
                            <th>
                                CC empleado
                            </th>
                            <th>
                               Empresa
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
                                Cuotas
                            </th>
                            <th>
                                Costo Cuota
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

            </div>
        </div>
    </div>
    @endforeach
@endsection
@section('script')
  <script src="{{URL::asset('assets/js/table.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/dataTables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/jszip.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>

@endsection
 
