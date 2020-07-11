@extends('layouts.menu')
@section('contenido')
    
    @foreach ($empresas as $data)
        <div class="row grid-margin">
            <h1 class="title center ml-3">
                {{$data->nombre}}
            </h1>
      
    </div>
    @endforeach

    <div class="row" style="justify-content: flex-end;margin-bottom: 5px; margin-right: 10px;">
        <a class="btnModal" data-idmodal="#divModal" href="{{ route('modalrestringir',[$id]) }}">
            <button class="add btn btn-primary font-weight-bold todo-list-add-btn">
                <i class="fa fa-plus-circle">
                </i> Crear restricción
            </button>
        </a>
    </div>
      <div class="table-responsive">
<table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                                Nombre Comercial
                        </th>
                        <th>
                                NIT
                        </th>
                        <th>
                                Razón social
                        </th>
                        <th>
                                Eliminar
                        </th>
                    </tr>
                </thead>
                    <tbody>
                      @foreach($data1 as $dat)
                        <tr> 
                            <td>
                                {{ $dat->nombre }}
                            </td>
                              <td>
                                {{ $dat->nit }}
                            </td>
                              <td >
                                {{ $dat->razon_social }}
                            </td>
                            <td>
                              <a href="{{ route('eliminarrestriccion',[$dat->id_restriccion]) }}"><button class="btn-xs btn-danger" ><i class="fa fas fa-window-close"></i></button></a></td>
                        </tr>
                        @endforeach
                    </tbody>
                    <tfoot>
                        <tr>
                            <th>
                                    Nombre Comercial
                            </th>
                            <th>
                                    NIT
                            </th>
                            <th>
                                    Razón social
                            </th>
                            <th>
                                    Eliminar
                            </th>
                        </tr>
                    </tfoot>
                  </table>
  
</div>


<div class="row  mr-2" style="justify-content: flex-end ;">
    <a class="btn btn-info pt-2" href="{{route('volver1',[$id])}}"  >Volver</a>
            
        </div>


  <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1"></div>
@endsection

@section('script')
<script type="text/javascript">
            $('.btnModal').on("click", function(event) {
              event.preventDefault();
           
              var $contenedorModal = $('#myModal');
              var urlModal         = $(this).attr("href");
              var idModal          = $(this).data("idmodal");
           
              $contenedorModal.load(urlModal + ' ' + idModal , function(response) {
              $(this).modal({backdrop: "static"});
              });
          });
        </script>
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