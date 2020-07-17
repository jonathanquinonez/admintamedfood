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
                    <h4 class="card-title">Productores</h4>
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
                                        <th>Verificado</th>
                                        <th>Email</th>
                                        <th>Ver</th>
                                  
                                    </tr>
                                </thead>
                                
                                <tbody>
                                   @foreach ($dataProductor as $item)
                                   <tr>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->apellido}}</td>
                                    <td>{{$item->telefono}}</td>
                                    <td>
                                        @if($item->verificado == 1)
                                        <div class="badge badge-success">Verificado</div>
                                        @endif
                                        @if($item->verificado != 1)
                                        <div class="badge badge-danger">No Verificado</div>
                                        @endif
                                    </td>
                                    <td>{{$item->email}}</td>
                                    <td>
                                    <a type="button" href="{{route('detalleProductor',[$item->id])}}" class="btn btn-success mr-1 mb-1"><i class="feather icon-check-square"></i> Ver</button>          
                                    </td>
                                </tr>
                                   @endforeach   
                             </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Apellido</th>
                                        <th>Telefono</th>
                                        <th>Verificado</th>
                                        <th>Email</th>
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