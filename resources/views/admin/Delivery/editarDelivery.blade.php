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
                                <h4 class="card-title">Detalle del Delivery</h4>
                            </div>
                            <form method="POST" action="#">
                                {{ csrf_field() }}
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        <h5>Información</h5>
                                        <div class="row">
                                            <div class="col-xl-4 col-md-6 col-12 mb-1">
                                                <fieldset class="form-group">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control {{ $errors->has('name') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->name }}" name="name">
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
                                                    <input type="text" class="form-control {{ $errors->has('apellido') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->apellido }}" name="apellido_usuario">
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
                                                    <input type="text" class="form-control {{ $errors->has('telefono_usuario') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->telefono }}" name="telefono_usuario">
                                                    @if ($errors->has('telefono_usuario'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('telefono_usuario') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-xl-4 col-md-6 col-12">
                                                <fieldset class="form-group">
                                                    <label>DNI</label>
                                                    <input type="text" class="form-control {{ $errors->has('identificacion') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->identificacion }}" name="identificacion">
                                                    @if ($errors->has('identificacion'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('identificacion') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-4">
                                                <fieldset class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control {{ $errors->has('direccion_user') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->direccion_user }}" name="direccion_user">
                                                    @if ($errors->has('direccion_user'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('direccion_user') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-3">
                                                <fieldset class="form-group">
                                                    <label>Dirección</label>
                                                    <input type="text" class="form-control {{ $errors->has('detalle_direccion') ? ' has-error' : '' }}" required="" value="{{ $dataDelivery->detalle_direccion }}" name="detalle_direccion">
                                                    @if ($errors->has('detalle_direccion'))
                                                        <span class="help-block badge bg-danger">
                                                        <strong>{{ $errors->first('detalle_direccion') }}</strong>
                                                    </span>
                                                    @endif
                                                </fieldset>
                                            </div>
                                            <div class="col-1">
                                               <i class="ficon feather icon-search"></i>
                                            </div>
                                            <div class="col-12" style="height: 200px">

                                            <div>
                                                <div id="pac-container">
                                                <input id="pac-input" type="text"
                                                    placeholder="Enter a location">
                                                </div>
                                            </div>
                                            <div id="map"></div>
                                            <div id="infowindow-content">
                                                <img src="" width="16" height="16" id="place-icon">
                                                <span id="place-name"  class="title"></span><br>
                                                <span id="place-address"></span>
                                            </div>
                                            </div>
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-success waves-effect waves-light"><i class="ficon feather icon-search"></i>&nbsp; Actualizar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>

                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Detalle de sus Pedidos</h4>
                            </div>
                          
                              
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                        {{-- <h5>Información del Productor</h5> --}}
                                        <div class="row">
                                            <div class="table-responsive">
                                                <table class="table table-striped dataex-html5-selectors">
                                                    <thead>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Apellido</th>
                                                            <th>Telefono</th>
                                                            <th>Direccion</th>
                                                            <th>Detalle Dirección</th>
                                                            <th>Imagen</th>
                                                            <th>Total</th>
                                                            <th>Fecha de pedido</th>
                                                            <th>Estado</th>
                                                            <th>Ver</th>
                                                        </tr>
                                                    </thead>
                                                <tbody>
                                                    @foreach ($dataPedidos as $item)
                                                    <tr>
                                                        <td>{{$item->name}}</td>
                                                        <td>{{$item->apellido}}</td>
                                                        <td>{{$item->telefono}}</td>
                                                        <td>{{$item->direccion}}</td>
                                                        <td>{{$item->detalle_direccion}}</td>
                                                         <td><img height="50" width="50" src="{{$item->img_perfil}}"></td>
                                                        <td>{{$item->total}}</td>
                                                        <td>{{$item->fecha_pedido}}</td>
                                                        <td>
                                                            @if ($item->nombre_estado == 1)
                                                                <div class="badge badge-success">Activo</div>
                                                            @endif
              
                                                            @if ($item->nombre_estado != 1)
                                                            <div class="badge badge-danger">INACTIVO</div>
                                                            @endif
                                                            <td>
                                                              <a type="button" href="{{route('detallePedido',[$item->id])}}" class="btn btn-success mr-1 mb-1"><i class="feather icon-check-square"></i> Ver</button>
                                                              </td>
                                                        </td>
                                                    </tr>
                                                    @endforeach 
                                                </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th>Nombre</th>
                                                            <th>Apellido</th>
                                                            <th>Telefono</th>
                                                            <th>Dirección</th>
                                                            <th>Detalle Dirección</th>
                                                            <th>Imagen</th>
                                                            <th>Total</th>
                                                            <th>Fecha de pedido</th>
                                                            <th>Estado</th>
                                                            <th>Ver</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                           

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
      var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -33.8688, lng: 151.2195},
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
        anchorPoint: new google.maps.Point(0, -29)
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

        infowindowContent.children['place-icon'].src = place.icon;
        infowindowContent.children['place-name'].textContent = place.name;
        infowindowContent.children['place-address'].textContent = address;
        infowindow.open(map, marker);
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

    <script src="{{URL::asset('app-assets/js/scripts/datatables/datatable.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.bootstrap4.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.bootstrap.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.print.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/pdfmake.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/vfs_fonts.')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/datatables.buttons.min.js')}}"></script>
    <script src="{{URL::asset('app-assets/vendors/js/tables/datatable/buttons.html5.min.js')}}"></script>
@endsection