@extends('layouts.menu')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/vendors/css/tables/datatable/datatables.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{URL::asset('app-assets/css/colors.css')}}">

    <style>
        #map{
            height: 100%;
          }
          </style>
@endsection


@section('contenido')

    <div class="content-wrapper">
        <div class="content-body">
            <section id="column-selectors">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Crear Productor</h4>
                            </div>
                            <form method="POST" action="#">
                                {{ csrf_field() }}
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h5>Datos de usuario</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label>Correo</label>
                                                    <input type="text" class="form-control" value="{{old('email')}}" name="email">
                                                    @if ($errors->has('email'))
                                                        <span class="help-block badge bg-danger">
                                                            <strong>{{ $errors->first('email') }}</strong>
                                                        </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label>Contraseña</label>
                                                <input type="text" class="form-control" value="{{old('password')}}" name="password" placeholder="">
                                                    @if ($errors->has('password'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">informacion del Producto</h4>
                            </div>
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label for="basicInputFile">Foto</label>
                                                    <div class="custom-file">
                                                        <input name="img_perfil" type="file" class="custom-file-input" id="inputGroupFile01">
                                                        <label class="custom-file-label" for="inputGroupFile01"></label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" value="{{old('name')}}" name="name">
                                                    @if ($errors->has('name'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Apellido</label>
                                                    <input type="text" class="form-control" value="{{old('apellido')}}" name="apellido">
                                                    @if ($errors->has('apellido'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('apellido') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Telefono</label>
                                                    <input type="text" class="form-control" value="{{old('telefono')}}" name="telefono">
                                                    @if ($errors->has('telefono'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('telefono') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label>DNI</label>
                                                    <input type="text" class="form-control" value="{{old('identificacion')}}" name="identificacion">
                                                    @if ($errors->has('identificacion'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('identificacion') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-12">
                                                <fieldset class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control" value="{{old('direccion')}}" name="direccion">
                                                    @if ($errors->has('direccion'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('direccion') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-12" >
                                                <div>
                                                    <div id="pac-container">
                                                    <input id="pac-input" type="text" class="form-control"
                                                        placeholder="Buscar dirección">
                                                    </div>
                                                </div>
                                                <div id="map" style="height: 200px"></div>
                                                <div id="infowindow-content">
                                                    <img src="" width="16" height="16" id="place-icon">
                                                    <span id="place-name"  class="title"></span><br>
                                                    <span id="place-address"></span>
                                                </div>
                                                </div>
                                            <div class="col-12" style="margin-top: 20px">
                                                <button type="submit" class="btn btn-success waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Guardar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>

@endsection

@section('script')
    <script>
        // This example requires the Places library. Include the libraries=places
        // parameter when you first load the API. For example:
        // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
    
        function initMap() {
            console.log("lat",document.f1.latitud.value)
            console.log("Lng",document.f1.longitud.value)
            pos = {
                lat: parseFloat(document.f1.latitud.value),
                lng: parseFloat(document.f1.longitud.value)
            }
          var map = new google.maps.Map(document.getElementById('map'), {
            center: pos,
            zoom: 13
          });
          var card = document.getElementById('pac-card');
          var input = document.getElementById('pac-input');
          var types = document.getElementById('type-selector');
          var strictBounds = document.getElementById('strict-bounds-selector');
    
          map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);
    
          var autocomplete = new google.maps.places.Autocomplete(input);
    
          // Bind the map's bounds (viewport) property to the autocomplete object,
          // so that the autocomplete requests use the current map bounds for the
          // bounds option in the request.
          autocomplete.bindTo('bounds', map);
    
          // Set the data fields to return when the user selects a place.
          autocomplete.setFields(
              ['address_components', 'geometry', 'icon', 'name']);
    
          var infowindow = new google.maps.InfoWindow();
          var infowindowContent = document.getElementById('infowindow-content');
          infowindow.setContent(infowindowContent);
          var marker = new google.maps.Marker({
            map: map,
            anchorPoint: new google.maps.Point(0, -29),
            position: pos,
            zoom: 13
          });
    
          autocomplete.addListener('place_changed', function() {
            infowindow.close();
            marker.setVisible(false);
            
            var place = autocomplete.getPlace();
            if (!place.geometry) {
              // User entered the name of a Place that was not suggested and
              // pressed the Enter key, or the Place Details request failed.
              window.alert("No details available for input: '" + place.name + "'");
              return;
            }
    
            // If the place has a geometry, then present it on a map.
            if (place.geometry.viewport) {
              map.fitBounds(place.geometry.viewport);
            } else {
              map.setCenter(place.geometry.location);
              map.setZoom(17);  // Why 17? Because it looks good.
            }
            marker.setPosition(place.geometry.location);
      
            marker.setVisible(true);
    
            var address = '';
            if (place.address_components) {
              address = [
                (place.address_components[0] && place.address_components[0].short_name || ''),
                (place.address_components[1] && place.address_components[1].short_name || ''),
                (place.address_components[2] && place.address_components[2].short_name || '')
              ].join(' ');
            }
            //document.f1.detalle_direccion.value = '';
            infowindowContent.children['place-icon'].src = place.icon;
            infowindowContent.children['place-name'].textContent = place.name;
            infowindowContent.children['place-address'].textContent = address;
            infowindow.open(map, marker);
            document.f1.direccion_user.value = address;
            document.f1.latitud.value = marker.getPosition().lat();
            document.f1.longitud.value = marker.getPosition().lng();
            console.log("direccion",document.f1.direccion_user.value);
            console.log("lng",marker.getPosition().lng());
            console.log("lat",marker.getPosition().lat());
            console.log("pos",pos);
          });
    
          // Sets a listener on a radio button to change the filter type on Places
          // Autocomplete.
          function setupClickListener(id, types) {
            var radioButton = document.getElementById(id);
            radioButton.addEventListener('click', function() {
              autocomplete.setTypes(types);
            });
          }
    
          setupClickListener('changetype-all', []);
          setupClickListener('changetype-address', ['address']);
          setupClickListener('changetype-establishment', ['establishment']);
          setupClickListener('changetype-geocode', ['geocode']);
    
          document.getElementById('use-strict-bounds')
              .addEventListener('click', function() {
                console.log('Checkbox clicked! New state=' + this.checked);
                autocomplete.setOptions({strictBounds: this.checked});
              });
        }
      </script>
        <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFZn-_2DpGEgdfnXX4gywzaGRS01HgA-U&libraries=places&callback=initMap"
        type="text/javascript"></script>
@endsection