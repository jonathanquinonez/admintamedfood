@extends('layouts.menu')
@section('css')
 <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 400px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
       }
    </style>
@endsection
@section('contenido')
<div class="row grid-margin">
    
    <h1 class="title col-12">
        {{$establecimiento}}
    </h1>
    <br>
    <h5 class="ml-3">Editar Sucursal</h5>
</div>
@foreach ($sucursal as $item)
            <div class="modal-body">
                <div class="row">
                    <form action="{{ url('editarsucrusal') }}" enctype="multipart/form-data" method="POST" name="f1" id="f1">
                        {{ csrf_field() }}
                        <div class="row">
                        <div class="col-6">
                                <div class="form-group{{ $errors->has('nombre') ? ' has-error' : '' }}">
                            <label>
                                Nombre 
                            </label>
                            <div id="the-basics">
                            <input class="typeahead" name="id"  required="" hidden type="text" value="{{$item->id}}">
                            <input class="typeahead" name="nombre"  required="" type="text" value="{{ucwords($item->nombre)}}">
                                
                                <input class="typeahead" name="id_establecimiento"  hidden type="text" value="{{$id}}">
                                <input class="typeahead" name="saldo_actual"  hidden type="text" value="0">
                                @if ($errors->has('nombre'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('nombre') }}</strong>
                                </span>
                            @endif
                            </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="form-group{{ $errors->has('ciudad') ? ' has-error' : '' }}">
                                <label>Ciudad</label>
                                <input class="typeahead" name="ciudad"  value="{{ucwords($item->ciudad)}} "list="n">
                                @if ($errors->has('ciudad'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('ciudad') }}</strong>
                                </span>
                            @endif
                                <datalist id="n">
                                        @foreach ($ciudad as $item1)
                                        <option value="{{ucwords($item1->descripcion)}}">{{ucwords($item1->descripcion)}}</option>
                                        @endforeach
                                </datalist> 
                                </div>
                        </div>
                         <div class="col-6">
                                <div class="form-group{{ $errors->has('nombre_contacto') ? ' has-error' : '' }}">
                            <label>
                                Nombre contacto
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="nombre_contacto"  required="" type="text" value="{{ ucwords($item->nombre_contacto) }}">
                                @if ($errors->has('nombre_contacto'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('nombre_contacto') }}</strong>
                                </span>
                            @endif
                                

                            </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="form-group{{ $errors->has('codigo_unico') ? ' has-error' : '' }}">
                            <label>
                                Teléfono contacto
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="telefono_contacto"  required="" type="text" value="{{ $item->telefono_contacto }}">
                                @if ($errors->has('telefono_contacto'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('telefono_contacto') }}</strong>
                                </span>
                            @endif
                                
                            </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                            <label>
                            Dirección
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="direccion"  type="text" value="{{$item->direccion }}">
                                @if ($errors->has('direccion'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                                </span>
                            @endif
                            </div>
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <label>
                                Correo
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="correo" required="" type="email" value="{{ucwords($item->correo) }}">
                                @if ($errors->has('correo'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('correo') }}</strong>
                                </span>
                            @endif
                            </div>
                                </div>
                        </div>
                         <div class="col-6">
                                <div class="form-group{{ $errors->has('longitud') ? ' has-error' : '' }}">
                            <label>
                                Longitud
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="longitud"  id="longitud"  readonly="" type="text" value="{{ $item->longitud }}">
                                <input class="typeahead" name="cod_qr" hidden type="text" value="12">
                                @if ($errors->has('longitud'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('longitud') }}</strong>
                                </span>
                            @endif
                            </div>
                                </div>
                        </div>
                         <div class="col-6">
                                <div class="form-group{{ $errors->has('latitud') ? ' has-error' : '' }}">
                            <label>
                                Latitud
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="latitud" id="latitud"  readonly="" type="text" value="{{ $item->latitud }}">
                                @if ($errors->has('latitud'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('latitud') }}</strong>
                                </span>
                            @endif
                            </div>
                                </div>
                        </div>
                      
                        <div class="col-6">

                            <div class="form-group">
                                <label for="exampleFormControlSelect3">
                                    E-commerce
                                </label>
                                <select class="form-control form-control-sm" name="web" id="exampleFormControlSelect3">
                                   <option value="" disabled selected>
                                       @if($item->web == 0)
                                       No
                                       @endif
                                       @if($item->web == 1)
                                       Si
                                       @endif
                                    </option>
                                    <option value="0">
                                        No
                                    </option>
                                    <option value="1">
                                        Si
                                    </option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect3">
                                    Bitucash
                                </label>
                                <select class="form-control form-control-sm" name="bitucash" id="exampleFormControlSelect3">
                                    <option value="" disabled selected>
                                       @if($item->bitucash == 0)
                                       No
                                       @endif
                                       @if($item->bitucash == 1)
                                       Si
                                       @endif
                                    </option>
                                    <option value="0">
                                        No
                                    </option>
                                    <option value="1">
                                        Si
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label>Porcentaje Bitucash</label>
                                <input class="typeahead" name="porcentajeBitucash" type="number" value="{{ $item->porcentajeBitucash }}">
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleFormControlSelect3">
                                    Enviar correo en todas las compras
                                </label>
                                <select class="form-control form-control-sm" name="envio_correos" id="exampleFormControlSelect3">
                                    <option value="" disabled selected>
                                       @if($item->envio_correos == 0)
                                       No
                                       @endif
                                       @if($item->envio_correos == 1)
                                       Si
                                       @endif
                                    </option>
                                    <option value="0">
                                        No
                                    </option>
                                    <option value="1">
                                        Si
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12">
                            
                           
                                <input class="btn btn-primary" name="crear"  type="submit" value="Editar">
                                
                            
                            
                                
                                <div class="row  mr-2" style="justify-content: flex-end ;">
                                        <a class="btn btn-info pt-2" href="{{route('volverestablecimiento',[$id])}}"  >Volver</a>
                                                        
                                                    </div>
                        </div>
                        </div>
                    </form>
                   
                </div>
            </div>
 @endforeach
            <div class="card">
                <div class="row">
                        <div class="col-12">
                          
                        </div>
                        <div class="col-12">
                            <div id="map"></div>
                        </div>
                </div>
                
            </div>
@endsection
@section('script')


       <script>
      var labels = 'AB';
      var labelIndex = 0;
        var map;
        var bangalore;
        var google;
        var maps;
         var contadormarker=0;
          var markers = [];
      function initialize() {
        bangalore = { lat: 4.6097100, lng: -74.0817500 };
        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 12,
          center: bangalore
        });

        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }

        // This event listener calls addMarker() when the map is clicked.
        google.maps.event.addListener(map, 'click', function(event) {

          addMarker(event.latLng, map);
          
        });

        // Add a marker at the center of the map.
            // addMarker(bangalore, map);
      }

      // Adds a marker to the map.
      function addMarker(location, map) {
        // Add the marker at the clicked location, and add the next-available label
        // from the array of alphabetical characters.
        document.f1.latitud.value = location.lat();
        document.f1.longitud.value = location.lng();
        console.log("location",location);
        if(contadormarker < 1){
           console.log("entro al if")

        var marker = new google.maps.Marker({
          position: location,
          map: map
        });
        console.log("marker",marker)
        markers.push(marker);
            contadormarker= contadormarker+1;
        }else{
                    document.f1.latitud.value = '';
        document.f1.longitud.value = '';
                clearMarkers();
                markers = [];
                contadormarker=0;
             
        }
        
      }

      function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }

        function clearMarkers() {
        setMapOnAll(null);
      }

      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@endsection

