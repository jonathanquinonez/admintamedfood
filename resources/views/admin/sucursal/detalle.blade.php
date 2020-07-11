@extends('layouts.menu')
@section('contenido')
@foreach ($sucursal as $data)
<div class="row grid-margin">
   
    <h1 class="title center ml-3">
        {{$data->nombre}}
    </h1>
</div>
<div class="row">
        <div class="col-md-3 grid-margin stretch-card">
                <a  href="{{ route('codigospromocionales',[$id_sucursal]) }}">
                    <div class="card bg-red">
                        <div class="card-body">
                            <div class="d-flex flex-row">
                                <h4 class="m-3 pl-10 pr-10 center" style="color: white; text-aling:center !important;">
                                    Código Promocional
                                </h4>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
</div>
<h3 class="title">Productos</h3>
<div class="row" style="justify-content: flex-end;margin-bottom: 7px;">
    <a  href="{{ route('formproducto',[$data->id]) }}" ><button class=" btn btn-success"><i class="fa fa-plus-circle"></i> Crear Producto</button> </a>
</div>
<div class="col-12 center">
        <br>
        @if (Session::has('exito'))
            <div class="help-block badge col-green">
                
                <h5>Creado con exito</h5>
                
            </div>
            @endif
            @if (Session::has('error'))
            <span class="help-block badge col-red">
               
                <strong>Ocurrio un error</strong>
               
            </span>
            @endif
        <br>
        </div>
<div>
    <div>
       
        <div class="table-responsive">
                <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-left: 10px;">
                        <a   href="{{ route('EstablecimientosSucursalesProductosPDF',[$data->id]) }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
                        <a   href="{{ route('ProductosExport',[$data->id]) }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                        
                    </div>
                    @endforeach
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                            <th>
                                    Id
                                </th>
                        <th>
                            Nombre
                        </th>

                        <th>
                            Imagen
                        </th>
                        <th>
                            Descripción
                        </th>
                        <th>
                            Cantidad
                        </th>
                        <th>
                            Cantidad Alerta
                        </th>
                        <th>
                            Valor
                        </th>
                        <th>
                            Estado
                        </th>
                        <th>Bitucash</th>
                        <th>Porcentaje Bitucash</th>
                        <th>
                            Activar / Desactivar
                        </th>
                        <th>
                            Editar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productos as $data)
                    <tr>
                            <td>
                                    {{$data->id}}
                                </td>
                        <td>
                            {{$data->nombre}}
                        </td>
                        <td>
                             <img alt="logo" class="img-lg rounded-circle" src="{{$data->imagen}}" width="100px" heigh="100px" style="width: 50px; height: 50px; margin-right: 10px;"/>
                        </td>
                        <td>
                            {{substr($data->descripcion,0,50)}}...
                        </td>
                        <td>
                            {{$data->cantidad_existente}}
                        </td>
                        <td>
                            {{$data->cantidad_alerta}}
                        </td>
                        <td>
                            {{number_format($data->valor,2)}}
                        </td>
                        <td>
                            @if($data->estado == 1)
                        		Activo
                        	@endif
                        	@if ($data->estado == 0 )
                        		Dado de baja
                        	@endif
                        </td>
                        <td>
                            @if($data->bitucash == 1)
                        		Activo
                        	@endif
                        	@if ($data->bitucash == 0 )
                        		Inactivo
                        	@endif
                        </td>
                        <td>
                            {{$data->porcentajeBitucash}}
                        </td>
                        <td>
                            @if($data->estado == 0)
                            <a  href="{{ route('activarproducto',[$data->id]) }}"><label class="badge badge-success">Activar</label></a>
                        	@endif
                        	@if ($data->estado == 1 )
                            <a  href="{{ route('desactivarproducto',[$data->id]) }}"><label class="badge badge-danger">Desactivar</label></a>
                        	@endif
                        </td>
                        <td>
                            <a  href="{{ route('formeditarproducto',[$data->id]) }}"><label class="badge badge-primary">Editar</label></a>
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
                            Nombre
                        </th>
                        <th>
                            Imagen
                        </th>
                        <th>
                            Descripción
                        </th>
                        <th>
                            Cantidad
                        </th>
                        <th>
                            Cantidad Alerta
                        </th>
                        <th>
                            Valor
                        </th>
                        <th>
                            Estado
                        </th>
                        <th>Bitucash</th>
                        <th>Porcentaje Bitucash</th>
                        <th>
                            Activar / Desactivar
                        </th>
                        <th>
                            Editar
                        </th>
                    </tr>
        </tfoot>
            </table>
        </div>
    </div>
    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    </div>
    <div class="row  mr-2" style="justify-content: flex-end ;">
            <a class="btn btn-info pt-2" href="{{route('volverestablecimiento',[$id_establecimiento])}}"  >Volver</a>
                            
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
