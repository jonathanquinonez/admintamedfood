@extends('layouts.menu')

@section('css')

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
                    <h4 class="card-title">Delivery</h4>
                </div>
                <div class="card-content">
                    <div class="card-body card-dashboard">
                        
                        <div class="table-responsive">
                            <table class="table table-striped dataex-html5-selectors">
                                <thead>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>telefono</th>
                                        <th>Email</th>
                                        <th>Verificado</th>
                                        <th>Activo</th>
                                        <th>Ver</th>
                                    </tr>
                                </thead>
                                
                                <tbody>
                                   @foreach ($dataDelivery as $item)
                                   <tr>
                                   <td>{{$item->name}}</td>
                                    <td>{{$item->apellido}}</td>
                                   <td>{{$item->telefono}}</td>
                                   <td>{{$item->email}}</td>
                                   <td>
                                    @if($item->verificado == 1)
                                         <div class="badge badge-success">Si</div>
                                    @else
                                         <div class="badge badge-warning">No</div>
                                    @endif
                                 </td>
                                 <td>
                                    @if($item->bloqueado == 0)
                                         <div class="badge badge-success">Si</div>
                                    @else
                                         <div class="badge badge-warning">No</div>
                                    @endif
                                 </td>
                                 <td>
                                    <a href="{{route('detalleDelivery', $item->user_id)}}" class="btn btn-sm btn-success waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Ver</a>
                                    <a href="#" class="btn btn-sm btn-danger waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Borrar</a>
                                </td>
                                </tr>
                                   @endforeach   
                             </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>telefono</th>
                                        <th>Email</th>
                                        <th>Verificado</th>
                                        <th>Activo</th>
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