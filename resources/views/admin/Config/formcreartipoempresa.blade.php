<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="ModalLabel">
                    Crear tipo entidad
                </h3>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        x
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <form action="{{ url('edittipoempresa') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <h2 class="card-inside-title">
                                    Nombre de la categoría
                                </h2>
                              
                                    <div id="the-basics">
                                    <input class="typeahead" name="descripcion" required="" type="text" value="">
                                  
                                </div>
                              
                               
                            </div>
                            
                            <div class="col-12" style=" margin-top: 10px; justify-content: flex-end;">
                                <input class="btn btn-success" name="actualizar" type="submit" value="Crear">
                                    <button class="btn btn-light" data-dismiss="modal" type="button">
                                        Cerrar
                                    </button>
                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
