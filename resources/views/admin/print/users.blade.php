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
        padding: 3px;
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
        width: 90%;

        }
        h1{
            font-family: “Trebuchet MS”, Arial;
            text-align:left;
        }
        tbody tr td{
        font-size: 10px;
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
        <h4>Usuarios App</h4>
        <h2><p>{{$today}}</p></h2>
        <hr>
        <div class="contenido">
            <table class="tabla">
                    <thead>
                            <tr>
                                    <th>
                                       D.I.
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th style="width:20px;">
                                        Correo
                                    </th>
                                    <th>
                                        Celular
                                    </th>
                                    <th>
                                        Empresa
                                    </th>
                                    <th>
                                        Fecha nacimiento
                                    </th>
                                    <th>
                                        Ciudad
                                    </th>
                                    
                                    <th>
                                        Género
                                    </th>
                                    <th>
                                        Monto Asignado
                                    </th>
                                    <th>
                                        Estado
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
                                    {{ucwords($data->nombre)}}
                                </td>
                                <td>
                                    {{ucwords($data->email)}}
                                </td>
                                <td>
                                    {{$data->celular}}
                                </td>
                                <td>
                                    {{ucwords($data->nombre_empresa)}}
                                </td>
                                <td>
                                    {{$data->fecha_nacimiento}}
                                </td>
                                <td>
                                    {{$data->ciudad}}
                                </td>
                                <td>
                                    {{$data->sexo}}
                                </td>
                                <td>
                                    {{$data->monto}}
                                </td>
                                <td>
                                    @if($data->bloqueo == 0)
                                    Activo
                                    @endif
                                    @if ($data->bloqueo == 1)
                                    Bloqueado
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                    
                  </table>
        </div>
    </body>
</html>