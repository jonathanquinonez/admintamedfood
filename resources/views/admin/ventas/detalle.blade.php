@extends('layouts.menu')

@section('contenido')

	<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        Detalle compra
                    </h4>
                    @foreach ($datas as $data)
                    {{-- <div class="row  pt-2" style="justify-content: flex-end ;">
                    <a class="dt-button buttons-print ml-4 pl-3 pr-3 pt-2 center" href="{{route('detallefacturapdf',[$data->id])}}"  >PDF</a>
                                    
                                </div> --}}
                    <p class="card-description">
                    </p>
<h6>Información de usuario</h6>
                    <form>
                    	
                    		{{-- expr --}}
                    	
                        <div class="form-group row">
                            <div class="col-2">
                                <label>
                                   N° Transacción
                                </label>
                                 <input class="typeahead" name="id_factura" placeholder="Id factura" readonly type="text" value="{{$data->id}}">

                            </div>
                            <div class="col-4">
                                    <label>
                                       Usuario
                                    </label>
                                     <input class="typeahead" name="nombre" placeholder="cedula"   readonly type="text" value="{{$data->nombre}}">
    
                                </div>
                            <div class="col-3">
                                <label>
                                    D.I.
                                </label>
                                <input class="typeahead" name="cedula" placeholder="cedula"  readonly  type="text" value="{{$data->cedula}}">

                            </div>
                            <div class="col-1">
                                <label>
                                   Cuotas
                                </label>
                                <input class="typeahead" name="cantidad" placeholder="cedula"  readonly  type="text" value="{{$data->cantidad_cuota}}">

                            </div>
                            <div class="col-3">
                                <label>
                                    Establecimiento
                                </label>
                                <div id="bloodhound">
                                    <input class="typeahead" name="establecmiento" placeholder="cedula"   readonly type="text" value="{{$data->nombre_establecimiento}}">

                                </div>
                            </div>
                            <div class="col-3">
                                <label>
                                    Sucursal
                                </label>
                                <input class="typeahead" name="sucursal" placeholder="cedula"   readonly type="text" value="{{$data->nombre_sucursal}}">

                            </div>
                            
                              <div class="col-3">
                                <label>
                                    Modalidad
                                </label>
                                @if($data->venta_web == 1)
                                <input class="typeahead" name="cedula" placeholder="cedula"   readonly type="text" value="Venta web">
                                @endif
                                @if($data->venta_web == 0)
                                <input class="typeahead" name="cedula" placeholder="cedula"   readonly type="text" value="Venta fisica">
                                @endif
                                

                            </div>
                              <div class="col-6">
                                <label style="margin-top: 10px;">
                                    Dirección  usuario
                                </label>
                                <input class="typeahead" name="cedula" placeholder="cedula"  readonly  type="text" value="{{$data->direccion}}">

                            </div>
                            
                        </div>
                  
                    </form>
                </div>
            </div>
        </div>
<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">

                	@if ($venta_web == 1)
                	  	<h4 class="card-title">
                       Venta Web
                    </h4>
                	    <table id="example" class="display" style="width:100%">
                <thead>
                    <tr>
                        <th>
                             Codigo Producto
                        </th>
                        <th>
                            Producto
                        </th>
                        <th>
                            Cantidad
                        </th>
                        <th>
                            Valor
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                   @foreach ($productos as $data1)
                   	{{-- expr --}}
                   
                    <tr>
                        <td>
                           {{$data1->id}}
                        </td>
                        <td>
                           {{$data1->nombre}}
                        </td>
                        <td>
                           {{$data1->cantidad}}
                        </td>
                        <td>
                           {{number_format($data->total,2)}}
                        </td>  
                    </tr>
                  @endforeach
                </tbody>
            </table>  
            <div class="row mt-5" style="justify-content: flex-end; margin-right: 120px;">
										<label class="btn btn-outline-warning" style="color:black !important;"><strong>Total: {{number_format($total,2)}}</strong></label> </div>          		
                	@endif
                	@if ($venta_web != 1)
                	<h4 class="card-title">
                       Venta Fisica
                    </h4>
                		  <div class="form-group row">
                		  	
                            <div class="col-12">
                                <label>
                                   Concepto: Transacción
                                </label>
                                
                            </div>
                            <div class="col-12">
                                <label>
                                 Total:  {{number_format($data->total,2)}}
                                </label>
                              
                            </div>  
                        </div>
                	@endif
         
            
        </div>
    </div>
</div>
             

			<div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="form-group row">
                            <div class="col-4">
                                <label>
                                   Fecha transacción al establecimiento
                                </label>
                                 <input class="typeahead" name="cedula" readonly placeholder="cedula"  type="text" value="{{$data->created_at}}">
                                   
                            </div>
                            @if ($venta_web == 1)
                            <div class="col-12">
                                <label style="margin-top: 10px;">
                                    Procedimiento para obtener el producto
                                </label>
                               <textarea class="form-control no-resize"  readonly  rows="5" class="typeahead" name="descripcion_entrega" style="width:100%;">{{$data->descripcion_ped}}</textarea>
                            </div>
                            @endif  
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
    
                        @if ($venta_web == 1)
                              <h4 class="card-title">
                           Respuesta formulario 
                        </h4>
                            <table id="example" class="display" style="width:100%">
                    <thead>
                        <tr>
                            <th>
                                 Pregunta
                            </th>
                            <th>
                               Respuesta
                            </th>
                            
                           
                        </tr>
                    </thead>
                    <tbody>
                       @foreach ($respuestas as $item1)
                           {{-- expr --}}
                       
                        <tr>
                            <td>
                               {{$item1->pregunta}}
                            </td>
                            <td>
                               {{$item1->respuesta}}
                            </td>
                              
                        </tr>
                      @endforeach
                    </tbody>
                </table>  
                 @endif
            
            </div>
        </div>
    </div>
        @if ($volver == 1)
        <div class="row  mr-2" style="justify-content: flex-end ;">
        <a class="btn btn-info pt-2" href="{{route('volvercompras',[$data->id_users, $volver])}}"  >Volver</a>
                
            </div>
        @endif
        @if ($volver == 2)
        <div class="row  mr-2" style="justify-content: flex-end ;">
        <a class="btn btn-info pt-2" href="{{route('volvercompras',[$data->id_users, $volver])}}"  >Volver</a>
                
            </div>
        @endif
        @if ($volver == 3)
        <div class="row  mr-2" style="justify-content: flex-end ;">
                <a class="btn btn-info pt-2" href="{{route('volvercompras',[$data->id_sucursal, $volver])}}"  >Volver</a>
                        
                    </div>
        @endif
        @if ($volver == 4)
        <div class="row  mr-2" style="justify-content: flex-end ;">
                <a class="btn btn-info pt-2" href="{{route('volvercompras',[$data->id_empresa, $volver])}}"  >Volver</a>
                        
                    </div>
        @endif
        @if ($volver == 5)
        <div class="row  mr-2" style="justify-content: flex-end ;">
                <a class="btn btn-info pt-2" href="{{route('volvercompras',[$data->id_empresa, $volver])}}"  >Volver</a>
                        
                    </div>
        @endif
        
                    @endforeach
@endsection