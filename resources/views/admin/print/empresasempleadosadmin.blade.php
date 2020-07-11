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
        <h1>Usuarios Administradores</h1>
        <h2><p>{{$today}}</p></h2>
        <hr>
        <div class="contenido">
            <table class="tabla">
                    <thead>
                            <tr>
                                    <th>
                                        ID
                                    </th>
                                    <th>
                                        D.I.
                                    </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Celular
                                    </th>
                                    <th>
                                        Correo
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
                                    {{$data->id}}
                                </td>
                                <td>
                                    {{$data->cedula}}
                                </td>
                                <td>
                                    {{$data->nombre_usuario}}
                                </td>
                                <td>
                                    {{$data->celular}}
                                </td>
                                <td>
                                    {{$data->email}}
                                </td>
                                <td>
                                    @if($data->bloqueo == 0)
                                    Activo
                                @endif
                                @if ($data->bloqueo != 0 )
                                   Inactivo
                                @endif
                                </td>
                            </tr>
                            @endforeach
                    </tbody>
                    
                  </table>
        </div>
    </body>
</html>