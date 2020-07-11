<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">
                  Formulario existente: 
                    @if (!$vacio)
                      {{$data->titulo_formulario}}
                    @endif
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        x
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <form action="{{ url('formulariosucursal') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                       
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleFormControlSelect3">
                                    Seleccionar un nuevo formulario de compra.
                                </label>
                                <select class="form-control form-control-sm" name="formulario">
                                   @foreach ($formularios as $data1)
                                    <option value="{{$data1->id}}">
                                {{$data1->titulo_formulario}}
                                    </option>
                                   @endforeach
                                </select>
                                @if (!$vacio)
                                    <input hidden="" name="id_formulario_existente"  value="{{$data->id}}">
                                @endif
                                <input hidden="" name="id_establecimiento"  value="{{$id}}">
                            </div>
                        </div>
                        <div class="col-12">
                            
                           
                                <input class="btn btn-success" name="crear"  type="submit" value="Seleccionar">
                                
                            
                            
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

