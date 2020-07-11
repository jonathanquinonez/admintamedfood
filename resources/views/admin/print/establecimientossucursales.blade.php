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
        <h2>Establecimientos</h2>
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
                                        Nombre sucursal
                                    </th>
                                    <th>
                                        Ciudad
                                    </th>
                                     <th>
                                        Nombre contacto
                                    </th>
                                    <th>
                                        Teléfono contacto
                                    </th>
                                    <th>
                                        Dirección
                                    </th>
                                    <th>
                                        Correo
                                    </th>
                                    <th>
                                        QR
                                    </th>
                                    <th>
                                        Bitucash
                                    </th>
                                    <th>
                                        PorcentajeBitucash
                                    </th>
                                    <th>
                                        Envio de correos
                                    </th>
                                </tr>
                    </thead>
                    <tbody>
                            @foreach ($datas2 as $data2)
                            <tr>
                                    <td>
                                            {{$data2->id}}
                                        </td>
                                <td>
                                    {{$data2->nombre}}
                                </td>
                                <td>
                                    {{$data2->ciudad}}
                                </td>
                                <td>
                                    {{$data2->nombre_contacto}}
                                </td>
                                <td>
                                    {{$data2->telefono_contacto}}
                                </td>
                                <td>
                                    {{$data2->direccion}}
                                </td>
                                <td>
                                    {{$data2->correo}}
                                </td>
                                <td>
                                    {{$data2->cod_qr}}
                                </td>
                                <td>
                                    @if($data2->bitucash==0)
                                    Inactivo
                                    @else
                                    Activo
                                    @endif
                                </td>
                                <td>
                                    {{$data2->porcentajeBitucash}}
                                </td>
                                <td>
                                    @if($data2->envio_correos==0)
                                    Inactivo
                                    @else
                                    Activo
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                   
                    </tbody>
                    
                  </table>
        </div>
    </body>
</html>