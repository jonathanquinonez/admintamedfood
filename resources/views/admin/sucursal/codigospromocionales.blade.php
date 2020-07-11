@extends('layouts.menu') 
@section('contenido')

<h3 class="title">Códigos Promocionales</h3>
            
<div class="row" style="justify-content: flex-end;margin-bottom: 7px; margin-right:5px;">
        <a href="{{ route('formcrearcodigos',[$id_sucursal]) }}" >
            <button class="add btn btn-primary font-weight-bold todo-list-add-btn">
            </i> Cargar Códigos
        </button> 
        </a>
    </div>
<div class="table-responsive">
        <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-right: 10px; margin-left:10px;">
                <a   href="{{ route('codigospromocionalespdf',[$id_sucursal]) }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
        <a   href="{{ route('codigospromocionalesexcel',[$id_sucursal]) }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                
            </div>
        <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>Código</th>
                        {{-- <th>descripcion</th> --}}
                        <th>Producto</th>
                        <th>Disponible hasta</th>
                    </tr>
                   
                </thead>
                <tbody>
                    @foreach ($data as $item)
                    <tr>
                        <td>
                            {{$item->codigo}}
                        </td>
                        {{-- <td>
                            {{$item->descripcion}}
                        </td> --}}
                        <td>
                            {{$item->nombre_producto}}
                        </td>
                        <td>
                            {{$item->fecha_vence}}
                        </td>
                    </tr>     
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                            <th>Código</th>
                            {{-- <th>descripcion</th> --}}
                            <th>Producto</th>
                            <th>Disponible hasta</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="row  mr-2" style="justify-content: flex-end ;">
                <a class="btn btn-info pt-2" href="{{route('versucursal',[$id_sucursal])}}"  >Volver</a>
                                
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
