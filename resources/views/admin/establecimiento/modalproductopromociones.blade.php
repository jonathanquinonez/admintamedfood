<div class="modal-dialog" id="divModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">
                        Agregar producto
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            x
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <form   method="POST" action="{{ url('agregarproducto') }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                       
                        <div class="form-group row">
                         
                        <input type="hidden" value="{{$id_promocion}}" name="id_promocion">
                            <div class="col-12">
                                <label>
                                    Productos
                                </label>
                                <div id="the-basics">
                                   <select class="form-control typeahead" name="id_producto">
                                       @foreach ($productos as $item)
                                       <option value="{{$item->id}}">{{$item->nombre}}</option>
                                       @endforeach
                                 
                                   </select>
                                    
                                </div>
                            </div>
                     
                          
                           
                            <div class="col-4" style="margin-top: 10px;">
                               
                                
                                    <input class="btn btn-success" name="save" type="submit" value="Agregar">
                                   
                                </div>
                                <div class="col-4" style="margin-top: 10px;">
                               
                                
                                    <button class="btn btn-light" data-dismiss="modal" type="button">
                                    Cerrar
                                </button>
                                   
                                </div>
                               
                            </div>
                        </div>
                     
                 </form>
                </div>
              
            </div>
        </div>
    </div>
    