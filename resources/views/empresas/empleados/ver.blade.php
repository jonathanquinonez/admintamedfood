<div class="modal-dialog" id="divModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ModalLabel">
                    Editar Empresa
                </h5>
                <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                    <span aria-hidden="true">
                        ×
                    </span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="form-group row">
                        <div class="col-6">
                            @foreach ($empresas as $data)
                            <label>
                                Codigo Unico
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="codigo_unico" type="text" value="{{$data->codigo_unico}}">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Nit
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="nit" type="text" value="{{$data->nit}}">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Nombre
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="nombre" type="text" value="{{$data->nombre}}">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Siglas
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="siglas" type="text" value="{{$data->nombre_corto}}">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Dirección
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="direccion" type="text" value="{{$data->direccion}}">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Ciudad
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="ciudad" type="text" value="{{$data->ciudad}}">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Telefono
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="telefono" type="text" value="{{$data->telefono}}">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Monto
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="monto" type="text" value="{{$data->monto}}">
                                </input>
                            </div>
                        </div>
                        <div class="col-12">
                            <label>
                            </label>
                            <img alt="logo {{$data->logo}}" class="img-lg rounded-circle" src="{{$data->logo}}" style="width: 50px; height: 50px;"/>
                        </div>
                        <div class="col-12">
                            <label>
                                Cambiar logo
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="logo" type="file">
                                </input>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" type="button">
                    Editar
                </button>
                <button class="btn btn-light" data-dismiss="modal" type="button">
                    Cerrar
                </button>
            </div>
        </div>
    </div>
</div>
