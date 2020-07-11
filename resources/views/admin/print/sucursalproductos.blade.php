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
        <h2>{{$item->nombre}} - Productos</h2>
        @endforeach
        
        <h3><p>{{$today}}</p></h3>
        <hr>
        <div class="contenido">
            <table class="tabla">
                    <thead>
                            <tr>
                                <th>
                                    ID
                            </th>
                                    <th>
                                        Nombre
                                    </th>
                                    <th>
                                        Imagen
                                    </th>
                                    <th>
                                        Descripción
                                    </th>
                                    <th>
                                        Cantidad
                                    </th>
                                    <th>
                                        Cantidad Alerta
                                    </th>
                                    <th>
                                        Valor
                                    </th>
                                    <th>
                                        Estado
                                    </th>
                                    <th>Bitucash</th>
                                    <th>porcentajeBitucash</th>
                                </tr>
                    </thead>
                    <tbody>
                            @foreach ($productos as $data)
                            <tr>
                                    <td>
                                            {{$data->id}}
                                        </td>
                                <td>
                                    {{$data->nombre}}
                                </td>
                                <td>
                                     <img alt="logo {{$data->imagen}}" class="img-lg rounded-circle" src="{{$data->imagen}}" style="width: 50px; height: 50px; margin-right: 10px;"/>
                                </td>
                                <td>
                                    {{$data->descripcion}}
                                </td>
                                <td>
                                    {{$data->cantidad_existente}}
                                </td>
                                <td>
                                    {{$data->cantidad_alerta}}
                                </td>
                                <td>
                                    {{number_format($data->valor,2)}}
                                </td>
                                <td>
                                    @if($data->estado == 1)
                                        Activo
                                    @endif
                                    @if ($data->estado != 1 )
                                        Dado de baja
                                    @endif
                                </td>
                                <td>{{$data->bitucash}}</td>
                                <td>{{$data->porcentajeBitucash}}</td>
                            </tr>
                            @endforeach
                   
                    </tbody>
                    
                  </table>
        </div>
    </body>
</html>