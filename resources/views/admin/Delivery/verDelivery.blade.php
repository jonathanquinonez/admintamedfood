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
                                        <th>Medida</th>
                                        <th>Stock</th>
                                  
                                    </tr>
                                </thead>
                                
                                <tbody>
                                   {{-- @foreach ($dataCliente as $item)
                                   <tr>
                                   <td>{{$item->nombre}}</td>
                                    <td>{{$item->medida}}</td>
                                   <td>{{$item->stock}}</td>
                                </tr>
                                   @endforeach    --}}
                             </tbody>

                                <tfoot>
                                    <tr>
                                        <th>Nombre</th>
                                        <th>Medida</th>
                                        <th>Stock</th>
                                        
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