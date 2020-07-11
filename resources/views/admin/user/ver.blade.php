@extends('layouts.menu')

@section('contenido')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">

            <h4 class="card-title">
                {{$user->nombre}}
                @if($user->bloqueo == 0)
                <label class="badge badge-success" >Activo</label>
            @endif
            @if ($user->bloqueo != 0 )
              <label class="badge badge-danger" >Inactivo</label>
            @endif
            </h4>
            
            <div class="form-group row">
                <div class="col-4">
                    <label>
                        Usuario
                    </label>
                    <div id="the-basics">
                        <input class="typeahead" readonly="" type="text" value="{{$user->nombre}}">
                       
                    </div>
                </div>
                <div class="col-4">
                    <label>
                        D.I.
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" readonly="" type="text" value="{{$user->cedula}}">
                        
                    </div>
                </div>
                <div class="col-4">
                        <label>
                            Fecha nacimiento
                        </label>
                        <div id="bloodhound">
                            <input class="typeahead" readonly="" type="text" value="{{$user->fecha_nacimiento}}">
                            
                        </div>
                    </div>
                    <div class="col-4">
                        <label>
                            Género
                        </label>
                        <div id="bloodhound">
                            <input class="typeahead" readonly="" type="text" value="{{ucwords($user->sexo)}}">
                            
                        </div>
                    </div>
                <div class="col-8">
                    <label>
                        Empresa
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" readonly="" type="text" value="{{ucwords($user->nombre_empresa)}}">
                       
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col-4">
                    <label>
                        Ciudad
                    </label>
                    <div id="the-basics">
                        <input class="typeahead" readonly="" type="text" value="{{$ciudad}}">
                        
                    </div>
                </div>
                <div class="col-4">
                        <label>
                            Dirección
                        </label>
                        <div id="the-basics">
                            <input class="typeahead" readonly="" type="text" value="{{$user->direccion}}">
                            
                        </div>
                    </div>
                    <div class="col-4">
                            <label>
                                Celular
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="celular" readonly="" type="text" value="{{$user->celular}}">
                                
                            </div>
                        </div>
                        <div class="col-12">
                            <label>
                                Email
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="celular" readonly="" type="text" value="{{$user->email}}">
                                
                            </div>
                        </div>
                <div class="col-6">
                    <label>
                        Monto Asignado
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" readonly="" type="text" value="{{number_format($user->monto,2)}}">
                        
                    </div>
                </div>
                <div class="col-6">
                    <label>
                        Bitucash
                    </label>
                    <div id="bloodhound">
                        @if($bitucash==null)
                        <input class="typeahead" readonly="" type="text" value="0">
                        @else
                        <input class="typeahead" readonly="" type="text" value="{{number_format($bitucash->monto)}}">
                        @endif
                        
                    </div>
                </div>
            </div>
            </div>
            
            <div class="template-demo mt-3">
                
                <a href="{{route('userspeticiones1',[$user->id_usuario])}}">
                    <p class="badge badge-success" type="button">
                        Historial de Peticiones
                    </p>
                </a>
               <div style="display: inline !important;">
                            @if($user->bloqueo == 0)
                                <a href="{{ route('desactivarempleado',[$user->empleados_id]) }}"><label class="badge badge-danger" >Desactivar</label></a>
                            @endif
                            @if ($user->bloqueo != 0 )
                               <a href="{{ route('activarempleado',[$user->empleados_id]) }}"><label class="badge badge-primary" >Activar</label></a>
                            @endif
                           
                            </div>

                
              
            </div>
        </div>
    </div>
</div>
<h3>
    Compras realizadas
</h3>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
    <div class="card-body">
            <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-right: 10px;">
                    <a   href="{{ route('ComprasEmpleadoPDF',[$user->empleados_id]) }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
                    <a   href="{{ route('ComprasEmpleadoExcel',[$user->empleados_id]) }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                    
                </div>
        <div class="table-responsive">
        <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Id Compra
                        </th>
                        <th>
                            Fecha | Hora
                        </th>
                        <th>
                            Establecimiento
                        </th>
                        <th>
                            Ciudad
                        </th>
                        <th>
                            E-commerce
                        </th>
                        <th>
                            Bitucash
                        </th>
                        <th>
                            Crédito
                        </th>
                        <th>
                            Total
                        </th>
                        <th>
                            Acción
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($factura as $dataf)
                    <tr>
                        <td>
                            {{$dataf->id}}
                        </td>
                        <td>
                            {{$dataf->created_at}}
                        </td>
                        <td>
                            {{$dataf->nombre_establecimiento}}
                        </td>
                        <td>
                            {{$dataf->ciudad_establecimiento}}
                        </td>
                        <td>
                            @if ($dataf->venta_web == 1)
                                Si
                            @endif
                            @if ($dataf->venta_web != 1)
                                No
                            @endif
                        </td>
                        <td>
                            ${{number_format($dataf->bitucash,2)}}
                        </td>
                        <td>
                            ${{number_format($dataf->total-$dataf->bitucash,2)}}
                        </td>
                        <td>
                            ${{number_format($dataf->total,2)}}
                        </td>
                        <td>
                        {{-- {{$volver}} --}}
                                <a href="{{route('detallefactura',[$dataf->id,$volver])}}">
                                        <button class="btn-xs btn-primary"><i class="fa fa-eye"></i></button>
                                        </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                        <tr>
                                <th>
                                    Id Compra
                                </th>
                                <th>
                                    Fecha | Hora
                                </th>
                                <th>
                                    Establecimiento
                                </th>
                                <th>
                                    Ciudad
                                </th>
                                <th>
                                    E-commerce
                                </th>
                                <th>
                                    Bitucash
                                </th>
                                <th>
                                    Crédito
                                </th>
                                <th>
                                    Total
                                </th>
                                <th>
                                    Acción
                                </th>
                            </tr> 
                </tfoot>
            </table>
            <div class="row  ml-3" style="justify-content: flex-start ;">

                    <h4>Total:  {{number_format($total, 2)}}</h4>
                       
                    </div>
        </div>
    </div>

    </div>
    <div class="row  mr-2" style="justify-content: flex-end ;">
            <a class="btn btn-info pt-2" href="{{route('volveruser',[$user->id,$volver])}}"  >Volver</a>
                            
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
