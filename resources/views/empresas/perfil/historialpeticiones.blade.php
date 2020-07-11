@extends('layouts.menu')

@section('contenido')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @foreach ($users as $data)
            <h2 class="card-title">
                {{$data->nombre}} - {{$data->nombre_empresa}}
            </h2>
            @endforeach
            <dir>
            </dir>
            <h5>
                Historial de peticiones de recarga
            </h5>
            <table class="table" id="order-listing">
                <thead>
                    <tr>
                        <th>
                            Fecha
                        </th>
                        <th>
                            id
                        </th>
                        <th>
                            Valor Solicitado
                        </th>
                        <th>
                            Valor Actual
                        </th>
                        <th>
                            Leido
                        </th>
                        <th>
                            Aprobado
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peticion as $data)
                    <tr>
                        <td>
                            {{$data->created_at}}
                        </td>
                        <td>
                            {{$data->id}}
                        </td>
                        <td>
                            {{$data->valor_solicitado}}
                        </td>
                        <td>
                            {{$data->valor_actual_monto}}
                        </td>
                        <td>
                            @if ($data->leido == 1)
                        		leido
                        	@endif
                        	@if ($data->leido != 1)
                        		Sin Leer
                        	@endif
                        </td>
                        <td>
                            @if ($data->aceptado == 1)
                        		Aprovado
                        	@endif
                        	@if ($data->aceptado != 1)
                        		@if($data->leido != 1)
                        		En espera
								@endif
								@if ($data->leido == 1)
									Rechazado
								@endif

                        	@endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
