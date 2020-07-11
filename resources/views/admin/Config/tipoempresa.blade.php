@extends('layouts.menu')

@section('contenido')
<h1 class="title">Tipo Entidad</h1>

	<div class="row" style="justify-content: flex-end;margin-bottom: 5px;">
    <a  class="btnModal" data-idmodal="#divModal" href="{{ route('verformcreartipoempresa') }}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-plus-circle"></i> Crear tipo entidad</button> </a>
    
</div>
<br>
<div>
    <div>
          <div class="table-responsive">
                <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-left: 10px;">
                        <a   href="{{ route('TipoempresaPDF') }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
                        <a   href="{{ route('TipoempresaExport') }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                        
                    </div>
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        
                        <th>
                            Acción
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tipoempresa as $data)
                    <tr>
                        <td>
                            {{$data->descripcion}}
                        </td>
                       
                        <td>
                        	<a class="btnModal" data-idmodal="#divModal" href="{{ route('formtipoempresa',[$data->id]) }}">
                                <button class="badge badge-warning">Editar</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                 <tfoot>
            <tr>
                  <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                                Acción
                        </th>
                       
                    </tr>
        </tfoot>
            </table>
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