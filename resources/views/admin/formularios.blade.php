@extends('layouts.menu')

@section('contenido')
	
	<h1>
    Formularios
</h1>
<div class="row" style="justify-content: flex-end;margin-bottom: 5px;">
    <a  class="btnModal" data-idmodal="#divModal" href="{{ route('verformformulariocrear') }}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-plus-circle"></i> Crear formulario</button> </a>
    
</div>
<br>
<div>
    <div>
        <div class="table-responsive">
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                             Nombre
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
                    @foreach ($formularios as $data)
                    <tr>
                        <td>
                            {{$data->titulo_formulario}}
                        </td>
                        <td>
                            @if($data->estado == 1)
                            Publicado
                            @endif
                            @if ($data->estado != 1)
                            	Sin publicar
                            @endif
                        </td>
                        <td>
 							<a href="{{ route('detalleformulario',[$data->id]) }}">
                               <label class="badge badge-success">Ver</label>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                 
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