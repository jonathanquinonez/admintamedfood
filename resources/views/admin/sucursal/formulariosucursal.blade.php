@extends('layouts.menu')

@section('contenido')

<h1 class="title">
    Empresas Cliente
</h1>
<div class="row" style="justify-content: flex-end;margin-bottom: 5px; margin-right: 10px;">
    <a  class="btnModal" data-idmodal="#divModal" href="{{ route('mostrarform') }}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-plus-circle"></i> Crear Empresa cliente</button> </a>
    
</div>
<br>


   
        <div class="table-responsive">
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Nombre formulario
                        </th>
                       {{--  <th>
                            Foto
                        </th> --}}
                        <th>
                            Estado
                        </th>
                        <th>
                            Fecha de publicación
                        </th>
                        <th>
                            Desacctivar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                    <tr>
                       
                        <td>
                          
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            
                        </td>
                        <td>
                            
                        </td>
                       
                    </tr>
                  
                </tbody>
                 <tfoot>
          		 <tr>
                        <th>
                            Nombre formulario
                        </th>
                       {{--  <th>
                            Foto
                        </th> --}}
                        <th>
                            Estado
                        </th>
                        <th>
                            Fecha de publicación
                        </th>
                        <th>
                            Desacctivar
                        </th>
                    </tr>
        </tfoot>
            </table>
      </div>


    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    </div>

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