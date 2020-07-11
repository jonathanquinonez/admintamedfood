@extends('layouts.menu')

@section('contenido')
	<h1 class="title">Establecimientos</h1>
  <div class="row" style="justify-content: flex-end;margin-bottom:10px; margin-right: 5px; ">
    <a  class="btnModal" data-idmodal="#divModal" style="margin-right: 5px" href="{{ route('formcrearcategoria') }}" ><button class=" btn btn-info"><i class="fa fa-plus-circle"></i> Crear Categoría</button> </a>
     <a  href="{{ route('formcrear') }}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-plus-circle"></i> Crear Establecimiento</button> </a>
    
</div>
<div class="card">
            <div class="card-body">
            	
            	
            	
	 <div class="table-responsive">
      <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-right: 10px; margin-left:10px;">
          <a   href="{{ route('AllEstablecimientosPDF') }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
          <a   href="{{ route('establecimientosexcel') }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
          
      </div>
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                    <thead>
                      <tr>
                     <th>Código único</th>
                     <th>Razón social</th>
                          <th>NIT</th>
                          <th>Nombre</th>
                          <th>Ciudad</th>
                          <th>Categoría</th>
                          <th>Teléfono contacto</th>
                          <th>Persona contacto</th>
                          <th>Estado</th>
                          <th>Ver</th>
                          <th>Acciones</th>
                          <th>Bloquear / Activar</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($establecimientos as $data)	
                      <tr>
                        <td>{{$data->codigo_unico}}</td>
                        <td>{{$data->razon_social}}</td>
                          <td>{{$data->nit}}</td>
                          <td>{{$data->nombre}}</td>
                          <td>{{$data->ciudad}}</td>
                          <td>{{ucwords($data->categoria)}}</td>
                          <td>{{$data->telefono_contacto}}</td>
                          
                          <td>{{$data->nombre_contacto}}</td>
                          <td>
                              @if ($data->bloqueado == 0)
                                Activo
                                @endif
                                @if ($data->bloqueado == 1)
                                Inactivo
                                @endif
                            </td>
                          <td>
                                <a  href="{{ route('formver',[$data->id]) }}"><label class="badge badge-info">Ver</label></a>
                          </td>
                          <td>
                                <a href="{{ route('formedit',[$data->id]) }}"><button class="badge badge-warning">Editar</button></a>
                          </td>
                          <td>
                                @if ($data->bloqueado == 0)
                                <a  href="{{ route('bloquearestablecimiento',[$data->id]) }}"><label class="badge badge-danger">Desactivar</label></a>
                                @endif
                                @if ($data->bloqueado == 1)
                                <a  href="{{ route('activarestablecimiento',[$data->id]) }}"><label class="badge badge-success">Activar</label></a>
                                @endif 
                            </td>
                      </tr>
                     @endforeach
                   
                    </tbody>
                    <tfoot>
                      <tr>
                        <th>Código único</th>
                        <th>Razón social</th>
                             <th>NIT</th>
                             <th>Nombre</th>
                             <th>Ciudad</th>
                             <th>Categoría</th>
                             <th>teléfono contacto</th>
                             <th>Persona contacto</th>
                             <th>Estado</th>
                             <th>Ver</th>
                             <th>Acciones</th>
                             <th>Bloquear / Activar</th>
                         </tr>
                    </tfoot>
                  </table>
                </div>
            </div>
        </div>

<div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
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