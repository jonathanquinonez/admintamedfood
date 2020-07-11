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
        @foreach ($sucursal as $item)
        <h2>{{$item->nombre}} - Transacciones</h2>
        @endforeach
        
        <h3><p>{{$today}}</p></h3>
        <hr>
        <div class="contenido">
            <table class="tabla">
                    <thead>
                            <tr>
                                    <th>
                                        Fecha / Hora
                                    </th>
                                    <th>
                                        D.I.
                                    </th>
                                    <th>
                                        Empleado
                                    </th>
                                    <th>
                                       Empresa
                                    </th>
                                    <th>
                                        N. Transacción
                                    </th>
                                    <th>
                                        Establecimiento
                                    </th>
                                    <th>
                                        Sucursal
                                    </th>
                                    <th>
                                        Total
                                    </th>
                            </tr>
                    </thead>
                    <tbody>
                            @foreach ($transacciones as $venta)
                            {{-- expr --}}

                            <tr>
                                <td>
                                    {{ $venta->created_at }}
                                </td>
                                <td>
                                    {{$venta->cedula}}
                                </td>
                                <td>
                                    {{$venta->nombreEmpleado}}
                                </td>
                                <td>
                                    {{$venta->nombre_empresa}}
                                </td>
                                <td>
                                    {{$venta->id}}
                                </td>
                                <td>
                                    {{$venta->nombre_establecimiento}}
                                </td>
                                <td>
                                    {{$venta->nombre_sucursal}}
                                </td>
                                <td>
                                    {{ number_format($venta->total,2) }}
                                </td>
                            </tr>
                        @endforeach
                   
                    </tbody>
                    
                  </table>
        </div>
    </body>
</html>