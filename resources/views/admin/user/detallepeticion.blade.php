@extends('layouts.menu')
@section('contenido')
	
	<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                       Datos cliente
                    </h4>
                    <p class="card-description">
                    </p>

                    <form>
                    	@foreach ($datas as $data)
                    		{{-- expr --}}
                    	
                        <div class="form-group row">
                            <div class="col-4">
                                <label>
                                    Nombre
                                </label>
                                 <input class="typeahead" readonly="" placeholder="cedula"  type="text" value="{{$data->nombre}}">
                                  
                            </div>
                            <div class="col-2">
                                <label>
                                    D.I.
                                </label>
                                <input class="typeahead" readonly="" placeholder="cedula"  type="text" value="{{$data->cedula}}">
                                   
                            </div>
                            <div class="col-3">
                                <label>
                                   Correo
                                </label>
                                <input class="typeahead" readonly="" placeholder="cedula"  type="text" value="{{$data->email}}">
                                   
                            </div>
                            <div class="col-2">
                                <label>
                                    Celular
                                </label>
                                <div id="bloodhound">
                                    <input class="typeahead" readonly="" placeholder="cedula"  type="text" value="{{$data->celular}}">
                                   
                                </div>
                            </div>
                         </div>   
                            
                              <h4 class="card-title">
		                        Petición de saldo
		                    </h4>
                              <div class="form-group row">
                              	<div class="col-4">
	                                <label>
	                                    Saldo Actual
	                                </label>
	                                <div id="bloodhound">
	                                    <input class="typeahead" readonly="" placeholder="cedula"  type="text" value="{{number_format($data->valor_actual_monto,2)}}">
	                                    
	                                </div>
                            	</div>
                            	<div class="col-4">
	                                <label>
	                                   Saldo requerido
	                                </label>
	                                <div id="bloodhound">
	                                    <input class="typeahead" readonly="" placeholder="cedula"  type="text" value="{{number_format($data->valor_solicitado,2)}}">
	                                   
	                                </div>
                            	</div>
                            	 <div class="col-12">
                                <label style="margin-top: 10px;">
                                    Solicitud
                                </label>
                               <textarea rows="5" readonly="" class="typeahead"  style="width:100%;">{{$data->descripcion}}</textarea>
                            </div>
                              </div>
                            
                        
                  
                    </form>
                </div>
            </div>
        </div>
<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                	
                	  	<h4 class="card-title">
                      Historial de transacciones
                    </h4>
                	   <div class="table-responsive">
<table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                             Fecha
                        </th>
                        <th>
                            N. Transacción
                        </th>
                        <th>
                           Establecimiento
                        </th>
                        <th>
                            Sucursal
                        </th>
                        <th>
                        	Tipo
                        </th>
                        <th>
                        	Costo total
                        </th>
                        <th>
                        	Cuotas
                        </th>
                        <th>
                        	Costo x cuotas
                        </th>
                        <th>
                            Detalle
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                   @foreach ($factura as $data1)
                   	{{-- expr --}}
                   
                    <tr>
                        <td>
                           {{$data1->created_at}}
                        </td>
                        <td>
                           {{$data1->id}}
                        </td>
                        <td>
                           {{$data1->nombre_establecimiento}}
                        </td>
                        <td>
                           {{$data1->nombre_sucursal}}
                        </td>
                        <td>
                        	@if ($data1->venta_web == 1)
                        		Venta web
                        	@endif
                           @if ($data1->venta_web != 1)
                           	   Venta fisica
                           @endif
                        </td> 
                        <td>
                           {{number_format($data1->total,2)}}
                        </td> 
                        <td>
                           {{$data1->cantidad_cuota}}
                        </td> 
                        <td>
                           {{number_format($data1->valor_cuota,2)}}
                        </td> 
                        <td>
                            <a href="{{route('detallefactura',[$data1->id,5])}}">
                             <button class="btn-xs btn-primary"><i class="fa fa-eye"></i></button>
                             </a>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                     <tr>
                        <th>
                             Fecha
                        </th>
                        <th>
                            N. Transacción
                        </th>
                        <th>
                           Establecimiento
                        </th>
                        <th>
                            Sucursal
                        </th>
                        <th>
                            Tipo
                        </th>
                        <th>
                            Costo total
                        </th>
                        <th>
                            Cuotas
                        </th>
                        <th>
                            Costo x cuotas
                        </th>
                        <th>
                            Detalle
                        </th>
                       
                    </tr>
                </tfoot>
            </table> 
            <div class="col-12">
                    <h5>
                     Total:  {{number_format($total,2)}}
                    </h5>
                  
                </div> 
            </div> 
        </div>
    </div>
</div>
             

			<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                	<h4 class="card-title">
                      Respuesta de la petición
                    </h4>
                    <form>
                        <div class="form-group row">
                            <div class="col-12">
                                <label>
                                   Respuesta
                                </label>
                                @if ($data->aceptado == 1) 
                                	<input class="typeahead"  readonly="" type="text" value="Aceptado">
                                   
                                @endif
                                 @if ($data->aceptado == 2)
                                	<input class="typeahead"  readonly="" type="text" value="Rechazado">
                                   
                                @endif
                                @if ($data->aceptado == 0)
                                <input class="typeahead"  readonly="" type="text" value="">
                               
                            @endif
                            </div>
                           
                            <div class="col-12">
                                <label style="margin-top: 10px;">
                                    Descripción respuesta
                                </label>
                               <textarea rows="5" readonly="" class="typeahead" name="descripcion_entrega" style="width:100%;">{{$data->descripcion_respuesta}}</textarea>
                            </div>
                           
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="row  mr-2" style="justify-content: flex-end ;">
                <a class="btn btn-info pt-2" href="{{route('volverpeticiones',[$data->id_empresa])}}"  >Volver</a>
                                
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