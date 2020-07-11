@extends('layouts.menu')
@section('contenido')
@foreach ($datas1 as $data1)
<div class="row grid-margin">
    
    <h1 class="title center ml-3">
        {{$data1->nombre}}
    </h1>
</div>
<div class="row">
    {{-- @if ($data1->estado_producto == 1)
         <div class="col-md-3 grid-margin stretch-card">
        <a href="{{ route('transaccionweb',[$data1->id]) }}">
            <div class="card bg-dark">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <img alt="profile image" class="img-lg rounded" src="https://placehold.it/100x100"/>
                        <div class="ml-3" style="color: white;">
                           Ventas E-commerce
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @endif
     --}}
    <div class="col-md-3 grid-margin stretch-card">
        <a class="btnModal" data-idmodal="#divModal" href="{{ route('formformulariover',[$data1->id]) }}">
            <div class="card bg-info">
                <div class="card-body">
                    <div class="d-flex flex-row">
                      
                        <h4 class="m-3 pl-10 pr-10 center" style="color: white; text-aling:center !important;">
                          Formulario web
                        </h4>
                    </div>
                </div>
            </div>
        </a>
        <h5>Formulario:<span class="help-block badge col-green">
                <strong>{{$formulario}}</strong>
            </span></h5>
                
            <br>
       
    </div>
    
    <div class="col-md-3 grid-margin stretch-card">
        <a  href="{{ route('promociones',[$data1->id]) }}">
            <div class="card bg-green">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <h4 class="m-3 pl-10 pr-10 center" style="color: white; text-aling:center !important;">
                            Promociones
                        </h4>
                    </div>
                </div>
            </div>
        </a>
    </div>
 
    <br>
</div>
<br>
<h3 class="title">Sucursales de  "{{$data1->nombre}}"</h3>
<div class="row" style="justify-content: flex-end;margin-bottom: 7px;">
    <a href="{{ route('formcrearsucrusal',[$data1->id]) }}" >
        <button class="add btn btn-primary font-weight-bold todo-list-add-btn">
        </i> Crear Sucursal
    </button> 
    </a>
</div>

<div>
    <div>
        <div class="table-responsive">
                <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-left: 10px;">
                        <a   href="{{ route('EstablecimientosSucursalesPDF',[$data1->id]) }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
                        <a   href="{{ route('sucursalesestablecimientoexcel',[$data1->id]) }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                        
                    </div>
                    @endforeach
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Nombre sucursal
                        </th>
                        <th>
                            Ciudad
                        </th>
                         <th>
                            Nombre contacto
                        </th>
                        <th>
                            Teléfono contacto
                        </th>
                        <th>
                            Dirección
                        </th>
                        {{-- <th>
                            Correo
                        </th> --}}
                        <th>Estado</th>
                        <th>Bitucash</th>
                        <th>porcentajeBitucash</th>
                        <th>Enviar Correos</th>
                        <th>
                            Acciones
                        </th>
                         <th>
                            QR
                        </th>
                        <th>
                            Editar
                        </th> 
                        <th>Bloquear / Activar</th>
                        
                    </tr>
                </thead>
                <tbody>
                    @foreach ($datas2 as $data2)
                    <tr>
                            <td>
                                    {{$data2->id}}
                                </td>
                        <td>
                            {{$data2->nombre}}
                        </td>
                         <td>
                            {{$data2->ciudad}}
                        </td>
                        <td>
                            {{ucwords($data2->nombre_contacto)}}
                        </td>
                        <td>
                            {{$data2->telefono_contacto}}
                        </td>
                        <td>
                            {{$data2->direccion}}
                        </td>
                        {{-- <td>
                            {{$data2->correo}}
                        </td> --}}
                        <td>
                            @if ($data2->bloqueado == 0)
                            Activo
                            @endif
                            @if ($data2->bloqueado == 1)
                            Inactivo
                            @endif
                        </td>
                        <td>
                            @if ($data2->bitucash == 0)
                            Inactivo
                            @endif
                            @if ($data2->bitucash == 1)
                            Activo
                            @endif
                        </td>
                        <td>
                            {{$data2->porcentajeBitucash}}
                        </td>
                        <td>
                            @if ($data2->envio_correos == 0)
                            Inactivo
                            @endif
                            @if ($data2->envio_correos == 1)
                            Activo
                            @endif
                        </td>
                        <td>
                            @if($data2->web == 1)
                                <a href="{{ route('versucursal',[$data2->id]) }}"><label class="badge badge-success">Productos</label></a>
                            @endif

                            <a href="{{ route('transacciones',[$data2->id]) }}"><label class="badge badge-info">Transacciones</label></a>
                        </td>
                         <td>
                            <a class="btnModal" data-idmodal="#divModal"  href="{{ route('verqr',[$data2->id]) }}"><label class="badge btn-primary"><i class="fa fas fa-qrcode"></i></label></a>
                        </td>
                        <td> 
                            <a   href="{{ route('formeditarsucrusal',[$data2->id]) }}"><label class="badge btn-warning"><i class="fa fas fa-pen"></i></label></a>
                        </td> 
                        <td>
                                @if ($data2->bloqueado == 0)
                                <a  href="{{ route('bloquearsucursal',[$data2->id]) }}"><label class="badge badge-danger">Desactivar</label></a>
                                @endif
                                @if ($data2->bloqueado == 1)
                                <a  href="{{ route('activarsucursal',[$data2->id]) }}"><label class="badge badge-success">Activar</label></a>
                                @endif 
                            </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                            <th>
                                    Id
                                </th>
                        <th>
                            Nombre sucursal
                        </th>
                        <th>
                            Ciudad
                        </th>
                         <th>
                            Nombre contacto
                        </th>
                        <th>
                            Teléfono contacto
                        </th>
                        <th>
                            Dirección
                        </th>
                        {{-- <th>
                            Correo
                        </th> --}}
                        <th>Estado</th>
                        <th>Bitucash</th>
                        <th>porcentajeBitucash</th>
                        <th>Enviar Correos</th>
                        <th>
                            Acciones
                        </th>
                         <th>
                            QR
                        </th>
                         <th>
                            Editar
                        </th>
                        <th>Bloquear / Activar</th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    </div>
    <div class="row  mr-2" style="justify-content: flex-end ;">
            <a class="btn btn-info pt-2" href="{{route('volverestablecimientos')}}"  >Volver</a>
                            
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
 
