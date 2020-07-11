@extends('layouts.menu')

@section('contenido')
@foreach ($empresas as $data)
<div class="row grid-margin ml-1">
    {{-- <img alt="logo {{$data->nombre_empresa}}" class="img-lg rounded-circle" src="{{$data->logo}}" style="width: 50px; height: 50px; margin-right: 10px;"/> --}}
    <h1 class="title center">
        {{$data->nombre_empresa}}
    </h1>
</div>
<div class="row ">
     <div class="col-md-3 grid-margin stretch-card">
        <a href="{{ route('restringir',[$data->id]) }}">
            <div class="card bg-dark">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        
                            <h4 class="m-3 pl-10 pr-10 center" style="color: white; text-aling:center !important;">
                          Restringir
                            </h4>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3 grid-margin stretch-card">
        <a  href="{{route('listaadmin',[$data->id])}}">
            <div class="card bg-green total-card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        
                            <h4 class="m-3 pl-10 pr-10 center" style="color: white; text-aling:center !important;">
                            Administradores
                            </h4>
                    </div>
                </div>
            </div>
        </a>
    </div>
     <div class="col-md-3 grid-margin stretch-card">
        <a href="{{route('peticionesempresa',[$data->id])}}">
            <div class="card bg-orange total-card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        
                            <h4 class="m-3 pl-10 pr-10 center" style="color: white; text-aling:center !important;">
                            Peticiones 
                            </h4>
                    </div>
                </div>
            </div>
        </a>
    </div>
     <div class="col-md-3 grid-margin stretch-card">
        <a  href="{{route('comprasempresa',[$data->id])}}">
            <div class="card bg-cyan total-card">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        
                            <h4 class="m-3 pl-10 pr-10 center" style="color: white; text-aling:center !important;">
                            Compras
                            </h4>
                    </div>
                </div>
            </div> 
        </a>
    </div>
</div>
<h3 class="title">Usuarios</h3>

<div>
    <div>
            <div class="row" style="justify-content: flex-end ;margin-bottom: 5px; margin-right: 10px;">
                    <a   href="{{ route('formimportcsv',[$data->id]) }}" ><button class="btn btn-info ml-4 pl-3 pr-3" style="width:inherit !important"><i class="fa fa-users"></i> Cargar usuarios</button> </a>
                     <!-- <a   href="{{ route('mostrarform') }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>  -->

                        <a   href="{{ route('crearempleadoempresa',[$data->id]) }}" ><button class="btn btn-primary ml-4 pl-3 pr-3" style="width:inherit !important"><i class="fa fa-user"></i> Crear usuario</button> </a>
                         <!-- <a   href="{{ route('mostrarform') }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>  -->
                        
                    </div>
       <div class="table-responsive">
            <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-right: 10px; margin-left:10px;">
                    <a   href="{{ route('AllEmpresasEmpleadosPDF',[$data->id]) }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">Pdf</button> </a>
                    <a   href="{{ route('empleadosempresaexcel',[$data->id]) }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                    
                </div>
                
                @endforeach
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            D.I.
                        </th>
                        <th>
                            Correo
                        </th>
                        
                        <th>
                            Estado
                        </th>
                        <th>Ver</th>
                        <th>
                            Acciones
                        </th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $data)
                    <tr>
                        <td>
                            {{$data->nombre}}
                        </td>
                        <td>
                            {{$data->cedula}}
                        </td>
                        <td>
                            {{$data->email}}
                        </td>
                       
                        <td>
                            @if($data->bloqueo == 0)
                        		Activo
                        	@endif
                        	@if ($data->bloqueo != 0 )
                        		Bloqueado
                        	@endif
                        </td>
                        <td>
                                <a href="{{ route('user',[$data->id_usuario,1]) }}">
                                    <label class="badge badge-info">
                                        Ver
                                    </label>
                                </a>
                            </td>
                        <td>
                             <div style="display: inline !important;">
                            @if($data->bloqueo == 0)
                                <a href="{{ route('desactivarempleado',[$data->id]) }}"><label class="badge badge-danger" >Desactivar</label></a>
                            @endif
                            @if ($data->bloqueo != 0 )
                               <a href="{{ route('activarempleado',[$data->id]) }}"><label class="badge badge-primary" >Activar</label></a>
                            @endif
                           
                            </div>
                        </td>
                        
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                        <tr>
                                <th>
                                    Nombre
                                </th>
                                <th>
                                    D.I
                                </th>
                                <th>
                                    Correo
                                </th>
                               
                                <th>
                                    Estado
                                </th>
                                <th>Ver</th>
                                <th>
                                    Acciones
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
