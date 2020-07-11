@extends('layouts.menu')
@section('contenido')
@foreach ($empresas as $data)
<div class="row grid-margin">
    <h1 class="title center ml-3">
        {{$data->nombre}}
    </h1>
</div>
<br>
<h3 class="title">Historial de compras</h3>

<div>
    <div >
          <div class="table-responsive">
                <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-right: 10px; margin-left:10px;">
                        <a   href="{{ route('AllEmpresasHistorialComprasPDF',[$data->id]) }}" ><button class="dt-button buttons-print  m-1  pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
                        <a   href="{{ route('empresacomprasaexcel',[$data->id]) }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                        
                    </div> 
                  
<table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                     <tr>
                        
                        <th>
                            Fecha | Hora
                        </th>
                         <th>
                          N° transacción
                        </th>
                         <th>
                         D.I.
                        </th>
                        <th>
                          Nombre
                        </th>
                        <th>
                            Establecimiento compra
                        </th>
                        <th>
                            Tipo compra
                        </th>
                        <th>
                            Bitucash
                        </th>
                        <th>
                            Crédito
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
                    @foreach ($compras as $data1)
                    <tr>
                        
                        <td>
                            {{$data1->created_at}}
                        </td>
                        <td>
                            {{$data1->id}}
                        </td>
                        <td>
                            {{$data1->cedula}}
                        </td>
                         <td>
                            {{ucwords($data1->nombre_usuario)}}
                        </td>
                        <td>
                            {{ucwords($data1->nombre_establecimiento)}}
                        </td>
                        <td>
                            @if($data1->venta_web == 1)
                               Web
                            @endif
                            @if($data1->venta_web != 1)
                               Fisico
                            @endif
                        </td>
                        <td>
                            ${{number_format($data1->bitucash,2)}}
                        </td>
                        <td>
                            ${{number_format($data1->total-$data1->bitucash,2)}}
                        </td>
                         <td>
                            ${{number_format($data1->total,2)}}
                        </td>
                        <td>
                             <a href="{{route('detallefactura',[$data1->id,4])}}">
                             <button class="btn-xs btn-primary"><i class="fa fa-eye"></i></button>
                             </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                 <tfoot>
                  <tr>
                        
                    <th>
                        Fecha | Hora
                    </th>
                         <th>
                          N° transacción
                        </th>
                         <th>
                          D.I.
                        </th>
                        <th>
                          Nombre
                        </th>
                        <th>
                            Establecimiento compra
                        </th>
                        <th>
                            Tipo compra
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
    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    </div>
</div>
<div class="row  ml-3" style="justify-content: flex-start ;">

<h4>Total:  {{number_format($total, 2)}}</h4>
   
</div>

<div class="row  mr-2" style="justify-content: flex-end ;">
        <a class="btn btn-info pt-2" href="{{route('volver1',[$data->id])}}"  >Volver</a>
                
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
