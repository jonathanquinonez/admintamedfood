<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">
                    Bloquear usuario "{{$nombre}}".
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        x
                    </span>
                </button>
            </div>
            <div class="modal-body">
               <div class="row">
                        <div class="col-4">
                           
                            
                               <a href="{{ route('bloquearuser',[$id]) }}"> <button class="btn btn-danger" >Bloquear</button> </a>
                               
                            </div>
                            <div class="col-4">
                           
                            
                                <button class="btn btn-light" data-dismiss="modal" type="button">
                                Cerrar
                            </button>
                               
                            </div>
                           
                        </div>
                  
                 </div>
             
            </div>
          
        </div>
    </div>
</div>
