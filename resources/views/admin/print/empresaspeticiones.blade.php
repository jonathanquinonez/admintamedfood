<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Document</title>
        <style>
        h1{
        text-align: center;
        text-transform: uppercase;
        }
        .contenido{
        font-size: 12px;
        }
        #primero{
        background-color: #ccc;
        }
        #segundo{
        color:#44a359;
        }
        #tercero{
        text-decoration:line-through;
        }
        .tabla thead th {
        padding: 5px;
        font-size: 12px;
        background-color: #83aec0;
        background-image: url(fondo_th.png);
        background-repeat: repeat-x;
        color: #FFFFFF;
        border-right-width: 1px;
        border-bottom-width: 1px;
        border-right-style: solid;
        border-bottom-style: solid;
        border-right-color: #558FA6;
        border-bottom-color: #558FA6;
        font-family: “Trebuchet MS”, Arial;
        text-align:left;
        }
        .tabla {
        font-family: Verdana, Arial, Helvetica, sans-serif;
        font-size:12px;
        text-align: right;
        width: 100%;

        }
        h1{
            font-family: “Trebuchet MS”, Arial;
            text-align:left;
        }
        tbody tr td{
        font-size: 12px;
        border: 1px;
        font-weight:bold;
        background-color: #fdfdf1;
        background-image: url(fondo_tr02.png);
        background-repeat: repeat-x;
        color: #333;
        font-family: “Trebuchet MS”, Arial;
        text-align:left;
        }
    </style>
    </head>
    <body>
        <h3>Peticiones Empresa</h3>
        <h2><p>{{$today}}</p></h2>
        <hr>
        <div class="contenido">
            <table class="tabla">
                    <thead>
                            <tr>
                                    <th>
                                         Id
                                    </th>
                                    <th>
                                         Fecha
                                    </th>
                                    <th>
                                         Nombre
                                    </th>
                                    <th>
                                        D.I.
                                    </th>
                                    <th>
                                        Valor solicitado
                                    </th>
                                    <th>
                                        Valor Actual
                                    </th>
                                    <th>
                                        Descripción
                                    </th>
                                    <th>
                                        Aceptado
                                    </th>
                                </tr>
                    </thead>
                    <tbody>
                            @foreach ($peticiones as $data)
                            <tr>
                                <td>
                                    {{$data->id}}
                                </td>
                                <td>
                                    {{$data->updated_at}}
                                </td>
                                <td>
                                    {{ucwords($data->nombre_usuario)}}
                                </td>
                                <td>
                                    {{$data->cedula}}
                                </td>
                                <td>
                                    {{number_format($data->valor_solicitado,2)}}
                                </td>
                                <td>
                                    {{number_format($data->valor_actual_monto,2)}}
                                </td>
                                <td>
                                    {{$data->descripcion}}
                                </td>
                                <td>
                                    @if ($data->aceptado == 0)
                                        Sin Aprobar
                                    @endif
                                    @if ($data->aceptado == 1)
                                    Aprobado
                                    @endif
                                    @if ($data->aceptado == 2)
                                    Rechazado
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                    
                  </table>
        </div>
    </body>
</html>