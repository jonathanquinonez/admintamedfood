<div class="modal-dialog" id="divModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">
                        Editar ciudad
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            x
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form   method="POST" action="{{ url('editciudades') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       @foreach ($data as $item)
                       <div class="form-group row">
                            <div class="col-6">
                                <label>
                                    Codigo
                                </label>
                                <div id="the-basics">
                                <input class="typeahead" name="codigo" type="text" value="{{$item->codigo}}" required="">
                                <input class="typeahead" name="id" hidden type="text" value="{{$item->id}}" required="">
                                      
                                </div>
                            </div>
                         
                            <div class="col-6">
                                <label>
                                    Ciudad
                                </label>
                                <div id="the-basics">
                                    <input class="typeahead" name="descripcion" type="text" required=""  value="{{$item->descripcion}}">
                                    
                                </div>
                            </div>
                     
                          
                           
                            <div class="col-4" style="margin-top: 10px;">
                               
                                
                                    <input class="btn btn-primary" name="save" type="submit" value="Editar">
                                   
                                </div>
                                <div class="col-4" style="margin-top: 10px;">
                               
                                
                                    <button class="btn btn-light" data-dismiss="modal" type="button">
                                    Cerrar
                                </button>
                                   
                                </div>
                               
                            </div>
                        </div>
                       @endforeach
                      
                     
                 </form>
                </div>
              
            </div>
        </div>
    </div>
    