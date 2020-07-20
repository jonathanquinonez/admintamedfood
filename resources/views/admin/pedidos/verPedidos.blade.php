@extends('layouts.menu')

@section('css')
 <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
<link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/colors.css')}}">
@endsection


@section('contenido')

<div class="content-wrapper">
    <div class="content-header row"></div>
    <div class="content-body">
<section id="column-selectors">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Pedidos</h4>
                    <a type="button" href="{{route('crearViewPedido')}}" class="btn btn-success mr-1 mb-1" ><i class="feather icon-check-square"></i> Nuevo</a>
      
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        
                        <div class="table-responsive">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Telefono</th>
                                        <th>rut</th>
                                        <th>Direccion</th>
                                        <th>Imagen</th>
                                        <th>Total</th>
                                        <th>Fecha de pedido</th>
                                        <th>Estado</th>
                                        <th>Ver</th>

                                    </tr>
                                </thead>
                                
                                <tbody>
                                  @foreach ($dataPedidos as $item)
                                      <tr>
                                          <td>{{$item->name}}</td>
                                          <td>{{$item->apellido}}</td>
                                          <td>{{$item->telefono}}</td>
                                          <td>{{$item->rut}}</td>
                                          <td>{{$item->direccion}}</td>
                                           <td><img height="50" width="50" src="{{$item->img_perfil}}"></td>
                                          <td>{{$item->total}}</td>
                                          <td>{{$item->fecha_pedido}}</td>
                                          <td>
                                              @if ($item->nombre_estado == 1)
                                                  <div class="badge badge-success">Activo</div>
                                              @endif

                                              @if ($item->nombre_estado != 1)
                                              <div class="badge badge-danger">INACTIVO</div>
                                              @endif
                                              <td>
                                                <a type="button" href="{{route('detallePedido',[$item->id])}}" class="btn btn-success mr-1 mb-1"><i class="feather icon-check-square"></i> Ver</button>
                                                </td>
                                          </td>
                                      </tr>
                                  @endforeach   
                             </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Telefono</th>
                                        <th>rut</th>
                                        <th>Direccion</th>
                                        <th>Imagen</th>
                                        <th>Total</th>
                                        <th>Fecha de pedido</th>
                                        <th>Estado</th>
                                        <th>Ver</th>

                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</div>
</div>



@endsection
@section('script')
<script src="{{URL::asset('app-assets/js/scripts/datatables/datatable.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/vfs_fonts.')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
<script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
@endsection
