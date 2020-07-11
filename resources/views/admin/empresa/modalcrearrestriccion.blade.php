<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">
                   Establecimiento a restringir
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        x
                    </span>
                </button>
            </div>
            <div class="modal-body">
              <form action="{{ url('crearrestriccion') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                    <div class="form-group row">
                         <div class="col-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect3">
                                    Establecimientos
                                </label>
                                <select class="form-control form-control-sm" name="establecimiento_id_establecimiento">
                                    
                                    @foreach ($data as $data1)
                                    <option value="{{$data1->id}}">
                                        {{$data1->nombre}}
                                    </option>
                                    @endforeach
                                </select>
                                <input type="" hidden="" name="empresas_id_empresa" value="{{$id}}">
                            </div>
                        </div>
                      
                                
                        <div class="col-4">
                           
                            
                                <input class="btn btn-danger" name="save" type="submit" value="Restringir">
                               
                            </div>
                            <div class="col-4">
                           
                            
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
