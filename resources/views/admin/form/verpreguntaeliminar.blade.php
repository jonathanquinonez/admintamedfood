<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">
                  Eliminar Pregunta
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        x
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form   method="POST" action="{{ url('preguntaeliminar') }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                   
                    <div class="form-group row">
                        <div class="col-12">
                            @foreach ($pregunta as $data)
                                <label>
                                Pregunta a elimminar
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="codigo_unico" type="text" value="{{$data->pregunta}}" readonly="" required="">
                                
                                <input  required="" class="typeahead" name="id_pregunta" type="hidden" value="{{$data->id}}">
                               
                            </div>
                            @endforeach
                            
                        </div>
                       
                        <div class="col-6" style="margin-top: 10px;">
                           
                            
                                <input class="btn btn-danger" name="save" type="submit" value="Eliminar">
                               
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
