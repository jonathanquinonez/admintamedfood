<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="ModalLabel">
                    Modificar Categoria
                </h3>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        x
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group row">
                    <form action="{{ url('editarcategoria') }}" enctype="multipart/form-data" method="POST">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-12">
                                <h2 class="card-inside-title">
                                    Nombre de la categoria
                                </h2>
                                @foreach ($datas as $data)
                                    <div id="the-basics">
                                    <input class="typeahead" name="descripcion" required="" type="text" value="{{$data->descripcion}}">
                                    <input class="typeahead" name="id" hidden="" required="" type="text" value="{{$data->id}}">
                                </div>
                                
                               
                            </div>
                            <div class="col-3">
                                <img src="{{$data->img}}">
                            </div>
                            <div class="col-12">
                                <h2 class="card-inside-title">Imagen 185 x 410</h2>
                                <div class="col-sm-12">
                                        <div class="file-field input-field">
                                            <div class="btn">
                                                <span>File</span>
                                                <input type="file" name="img">
                                            </div>
                                            <div class="file-path-wrapper">
                                                <input class="file-path validate" type="text" name="img">
                                            </div>
                                        </div>
                                </div>
                            </div>
                            @endforeach
                            
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
