@extends('layouts.menu')

@section('contenido')
	<h1>Establecimientos</h1>
<div class="card">
            <div class="card-body">
            	
            	
            	
	 <div class="col-12">
                  <table id="order-listing" class="table">
                    <thead>
                      <tr>
                     
                          <th>Order #</th>
                          <th>Nombre</th>
                          <th>Ciudad</th>
                          <th>Categoría</th>
                          <th>Ver</th>
                          <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody>

                    @foreach ($establecimientos as $data)	
                      <tr>
                          <td>{{$data->id}}</td>
                          <td>{{$data->nombre}}</td>
                          <td>{{$data->ciudad}}</td>
                          <td>{{$data->categoria}}</td>
                          <td>
                            <a href="{{ route('empresa',[$data->id]) }}"><label class="badge badge-info">Ver</label></a>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">Editar</button>
                          </td>
                      </tr>
                     @endforeach
                   
                    </tbody>
                  </table>
                </div>
            </div>
        </div>


   <div class="col-md-4 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Varying Modal Content</h4>
                  <div class="modal fade" id="exampleModal-4" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="ModalLabel">New message</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form>
                            <div class="form-group">
                              <label for="recipient-name" class="col-form-label">Recipient:</label>
                              <input type="text" class="form-control" id="recipient-name">
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Message:</label>
                              <textarea class="form-control" id="message-text"></textarea>
                            </div>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-success">Send message</button>
                          <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <button type="button" class="btn btn-info" data-toggle="modal" data-target="#exampleModal-4" data-whatever="@mdo">Open modal for @mdo</button>
                </div>
              </div>
            </div>

@endsection
