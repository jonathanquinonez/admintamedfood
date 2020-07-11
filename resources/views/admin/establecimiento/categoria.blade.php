<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">
                    Crear categoría 
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        x
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <form action="{{ url('crearcategoria') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <label>
                                    Nombre de la categoría
                                </label>
                                <div id="the-basics">
                                    <input class="typeahead" name="descripcion" required="" type="text">
                                    
                                </div>
                            </div>
                            <div class="col-12">
                                <h2 class="card-inside-title">Imagen 185 x 410</h2>
                                <div class="col-sm-12">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file"name="img">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text">
                                            </div>
                                        </div>
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
