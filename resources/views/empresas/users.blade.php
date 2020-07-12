@extends('layouts.menu')

@section('contenido')
<h3>
    Establecimientos
</h3>
<div class="card">
    <div class="card-body">
        <div class="col-12">
            <table class="table" id="order-listing">
                <thead>
                    <tr>
                        <th>
                            CC
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Correo
                        </th>
                        <th>
                            Empresa
                        </th>
                        <th>
                            Estado
                        </th>
                        <th>
                            Ver
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $data)
                    <tr>
                        <td>
                            {{$data->cedula}}
                        </td>
                        <td>
                            {{$data->nombre}}
                        </td>
                        <td>
                            {{$data->email}}
                        </td>
                        <td>
                            {{$data->nombre_empresa}}
                        </td>
                        <td>
                            @if($data->bloqueo == 0)
                            Activo
                            @endif
                            @if ($data->bloqueo == 1)
                            Bloqueado
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('user',[$data->id]) }}">
                                <label class="badge badge-info">
                                    Ver
                                </label>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
