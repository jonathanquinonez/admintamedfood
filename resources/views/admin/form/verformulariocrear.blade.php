<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">
                  Crear Formulario
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        x
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form   method="POST" action="{{ url('formulariocrear') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                   
                    <div class="form-group row">
                        <div class="col-12">
                            <label>
                                Nombre del formulario 
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="titulo_formulario" type="text" value="" required="">
                                
                            </div>
                        </div>
                       
                        <div class="col-6" style="margin-top: 10px;">
                           
                            
                                <input class="btn btn-success" name="save" type="submit" value="Crear">
                               
                            </div>
                            <div class="col-6" style="margin-top: 10px;">
                           
                            
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
