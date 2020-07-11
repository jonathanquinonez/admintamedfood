@extends('layouts.menu')

@section('contenido')
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            @foreach ($users as $data)
            <h4 class="card-title">
                {{$data->nombre}}
            </h4>
            @endforeach
            <div class="form-group row">
                @foreach ($users as $data)
                <div class="col">
                    <label>
                        Empleado
                    </label>
                    <div id="the-basics">
                        <input class="typeahead" readonly="" type="text" value="{{$data->nombre}}">
                        </input>
                    </div>
                </div>
                <div class="col">
                    <label>
                        CC
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" readonly="" type="text" value="{{$data->cedula}}">
                        </input>
                    </div>
                </div>
                <div class="col">
                    <label>
                        Empresa
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" readonly="" type="text" value="{{$data->nombre_empresa}}">
                        </input>
                    </div>
                </div>
            </div>
            <div class="form-group row">
                <div class="col">
                    <label>
                        Dirección
                    </label>
                    <div id="the-basics">
                        <input class="typeahead" readonly="" type="text" value="{{$data->direccion}}">
                        </input>
                    </div>
                </div>
                <div class="col-4">
                    <label>
                        Monto Asignado
                    </label>
                    <div id="bloodhound">
                        <input class="typeahead" readonly="" type="text" value="{{$data->monto}}">
                        </input>
                    </div>
                </div>
            </div>
            <div class="template-demo">
                <a href="{{route('peticiones',[$data->id])}}">
                    <button class="btn btn-success" type="button">
                        Cambio de contraseña
                    </button>
                </a>
                <a href="{{route('peticiones',[$data->empleados_id])}}">
                    <button class="btn btn-primary" type="button">
                        Historial de transacciones
                    </button>
                </a>
                <a href="{{route('peticiones',[$data->id])}}">
                    <button class="btn btn-danger" type="button">
                        Bloquear usuario
                    </button>
                </a>
                @endforeach
            </div>
        </div>
    </div>
</div>
<h3>
    Compras realizadas
</h3>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card-body">
        <div class="col-12">
            <table class="table" id="order-listing">
                <thead>
                    <tr>
                        <th>
                            Id Compra
                        </th>
                        <th>
                            Fecha
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
                            Costo
                        </th>
                        <th>
                            Acción
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($factura as $data)
                    <tr>
                        <td>
                            {{$data->id}}
                        </td>
                        <td>
                            {{$data->created_at}}
                        </td>
                        <td>
                            {{$data->nombre_establecimiento}}
                        </td>
                        <td>
                            {{$data->ciudad_establecimiento}}
                        </td>
                        <td>
                            {{$data->venta_web}}
                        </td>
                        <td>
                            {{$data->total}}
                        </td>
                        <td>
                            <button class="btn btn-outline-primary">
                                Ver
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
