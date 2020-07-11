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
                                    <th>Código único</th>
                                    <th>Razón social</th>
                                         <th>NIT</th>
                                         <th>Nombre</th>
                                         <th>Descripción</th>
                                         <th>Ciudad</th>
                                         <th>Categoría</th>
                                         <th>Teléfono contacto</th>
                                         <th>Persona contacto</th>
                                         <th>Estado</th>
                                       
                                        
                                     </tr>
                    </thead>
                    <tbody>
                     @foreach ($establecimientos as $data)	
                      <tr>
                        <td>{{$data->codigo_unico}}</td>
                        <td>{{$data->razon_social}}</td>
                          <td>{{$data->nit}}</td>
                          <td>{{$data->nombre}}</td>
                          <td>{{$data->direccion}}</td>
                          <td>{{$data->ciudad}}</td>
                          <td>{{$data->categoria}}</td>
                          <td>{{$data->telefono_contacto}}</td>
                          <td>{{$data->nombre_contacto}}</td>
                          <td>
                                @if($data->bloqueado == 1)
                                Desactivado                          
                              @endif
                                @if($data->bloqueado == 0)
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