@extends('layouts.menu')
@section('contenido')
@foreach ($empresas as $data)
<div class="row grid-margin">
    <img alt="logo {{$data->nombre_empresa}}" class="img-lg rounded-circle" src="{{$data->logo}}" style="width: 50px; height: 50px; margin-right: 10px;"/>
    <h1 class="title center">
        {{$data->nombre_empresa}}
    </h1>
</div>
<div class="row">
    <div class="col-md-4 grid-margin stretch-card">
        <a href="{{ route('restringir',[$data->id]) }}">
            <div class="card bg-success">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <img alt="profile image" class="img-lg rounded" src="https://placehold.it/100x100"/>
                        <div class="ml-3" style="color: white;">
                            Restringir establecimientos
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-4 grid-margin stretch-card">
        <a class="btnModal" data-idmodal="#divModal" href="{{route('crearusuario',[$data->id])}}">
            <div class="card bg-primary">
                <div class="card-body">
                    <div class="d-flex flex-row">
                        <img alt="profile image" class="img-lg rounded" src="https://placehold.it/100x100"/>
                        <div class="ml-3" style="color: white;">
                            Agregar administrador a la empresa
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
@endforeach
<div class="card">
    <div class="card-body">
        <div class="col-12">
            <table class="table" id="order-listing">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Correo
                        </th>
                        <th>
                            Monto Actual
                        </th>
                        <th>
                            Estado
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empleados as $data)
                    <tr>
                        <td>
                            {{$data->nombre}}
                        </td>
                        <td>
                            {{$data->email}}
                        </td>
                        <td>
                            {{$data->monto}}
                        </td>
                        <td>
                            @if($data->bloqueo == 0)
                        		Activo
                        	@endif
                        	@if ($data->bloqueo != 0 )
                        		Bloqueado
                        	@endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    </div>
</div>
@endsection
 @section('script')
<script type="text/javascript">
    $('.btnModal').on("click", function(event) {
              event.preventDefault();
           
              var $contenedorModal = $('#myModal');
              var urlModal         = $(this).attr("href");
              var idModal          = $(this).data("idmodal");
           
              $contenedorModal.load(urlModal + ' ' + idModal , function(response) {
              $(this).modal({backdrop: "static"});
              });
          });
</script>
@endsection
