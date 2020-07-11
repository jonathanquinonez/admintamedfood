@extends('layouts.menu')
@section('contenido')
@foreach ($empresas as $data)
<div class="row grid-margin">
     <h1 class="title center ml-3">
        {{$data->nombre}}
    </h1>
</div>
<div class="row" style="justify-content: flex-end;margin-bottom: 8px;">
    <a   href="{{route('crearusuario',[$data->id,1])}}"><button class=" btn btn-success"><i class="fa fa-plus-circle"></i> Crear Usuario Admin</button> </a>
    
</div>
<h3 class="title">Lista de administradores</h3>



<div>
    <div >
           <div class="table-responsive">
                <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-right: 10px; margin-left:10px;">
                        <a   href="{{ route('AllEmpresasEmpleadosAdministradoresPDF',[$data->id]) }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
                <a   href="{{ route('empresaempleadosadminexcel',[$data->id]) }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                        
                    </div>
                  
<table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                             id
                        </th>
                       
                        <th>
                            Nombre
                        </th>
                      <th>
                          D.I.
                      </th>
                      <th>
                          Celular
                      </th>
                        <th>
                            Correo
                        </th>
                        <th>
                            Estado
                        </th>
                        <th>
                            Bloqueo
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $data1)
                    <tr>
                        <td>
                            {{$data1->id}}
                        </td>
                        
                        <td>
                            {{ucwords($data1->nombre_usuario)}}
                        </td>
                        <td>
                                {{$data1->cedula}}
                            </td>
                            <td>
                                    {{$data1->celular}}
                                </td>
                        <td>
                            {{$data1->email}}
                        </td>
                        <td>
                            @if($data1->bloqueo == 0)
                            Activo
                        @endif
                        @if ($data1->bloqueo != 0 )
                           Inactivo
                        @endif
                        </td>
                        <td>
                            <div style="display: inline !important;">
                            @if($data1->bloqueo == 0)
                                <a href="{{ route('desactivarempleado',[$data1->id]) }}"><label class="badge badge-danger" >Desactivar</label></a>
                            @endif
                            @if ($data1->bloqueo != 0 )
                               <a href="{{ route('activarempleado',[$data1->id]) }}"><label class="badge badge-primary" >Activar</label></a>
                            @endif
                           
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                 <tfoot>
                        <tr>
                                <th>
                                     id
                                </th>
                               
                                <th>
                                    Nombre
                                </th>
                              <th>
                                  D.I.
                              </th>
                              <th>
                                  Celular
                              </th>
                                <th>
                                    Correo
                                </th>
                                <th>
                                    Estado
                                </th>
                                <th>
                                    Bloqueo
                                </th>
                               
                            </tr>
        </tfoot>
            </table>

        </div>
        <div class="col-12 center">
            <br>
            @if (Session::has('exito'))
                <div class="help-block badge col-green">
                    
                    <h5>Creado con exito</h5>
                    
                </div>
                {{-- <script>
                        swal({
                            text: "{!! Session::get('sweet_alert.text') !!}",
                            title: "{!! Session::get('sweet_alert.title') !!}",
                            timer: {!! Session::get('sweet_alert.timer') !!},
                            icon: "{!! Session::get('sweet_alert.type') !!}",
                            buttons: "{!! Session::get('sweet_alert.buttons') !!}",
                
                            // more options
                        });
                    </script> --}}
                @endif
                @if (Session::has('error'))
                <span class="help-block badge col-red">
                   
                    <strong>Ocurrio un error</strong>
                   
                </span>
                @endif
            <br>
            </div>
    </div>
    <div class="row  mr-2" style="justify-content: flex-end ;">
            <a class="btn btn-info pt-2" href="{{route('volver1',[$data->id])}}"  >Volver</a>
                    
                </div>
    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
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
