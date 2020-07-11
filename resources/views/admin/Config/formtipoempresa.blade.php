<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="ModalLabel">
                    Modificar tipo empresa
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
                                    Nombre de la categoria
                                </h2>
                                @foreach ($datas as $data)
                                    <div id="the-basics">
                                    <input class="typeahead" name="descripcion" required="" type="text" value="{{$data->descripcion}}">
                                    <input class="typeahead" name="id" hidden="" required="" type="text" value="{{$id}}">
                                </div>
                                @endforeach
                               
                            </div>
                            
                            <div class="col-12" style=" margin-top: 10px; justify-content: flex-end;">
                                <input class="btn btn-success" name="actualizar" type="submit" value="Editar">
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
