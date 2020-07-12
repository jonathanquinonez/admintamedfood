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
        <h2>Empresas compras</h2>
        <h3><p>{{$today}}</p></h3>
        <hr>
        <div class="contenido">
            <table class="tabla">
                    <thead>
                            <tr>
                        
                                    <th>
                                        Fecha | Hora
                                    </th>
                                     <th>
                                      ID compra
                                    </th>
                                     <th>
                                      D.I.
                                    </th>
                                    <th>
                                      Nombre
                                    </th>
                                    <th>
                                        Establecimiento compra
                                    </th>
                                    <th>
                                        Tipo compra
                                    </th>
                                    <th>
                                        Bitucash
                                    </th>
                                    <th>
                                        Crédito
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                    
                                </tr>
                    </thead>
                    <tbody>
                            @foreach ($compras as $data)
                            <tr>
                                
                                <td>
                                    {{$data->created_at}}
                                </td>
                                <td>
                                    {{$data->id}}
                                </td>
                                <td>
                                    {{$data->cedula}}
                                </td>
                                 <td>
                                    {{ucwords($data->nombre_usuario)}}
                                </td>
                                <td>
                                    {{ucwords($data->nombre_establecimiento)}}
                                </td>
                                <td>
                                    @if($data->venta_web == 1)
                                       Web
                                    @endif
                                    @if($data->venta_web != 1)
                                       Fisico
                                    @endif
                                </td>
                                <td>
                                    ${{number_format($data->bitucash,2)}}
                                </td>
                                <td>
                                    ${{number_format($data->total-$data->bitucash,2)}}
                                </td>
                                 <td>
                                    ${{number_format($data->total,2)}}
                                </td>
                               
                            </tr>
                            @endforeach
                    </tbody>
                    
                  </table>
        </div>
    </body>
</html>