<div class="modal-dialog" id="divModal">
    <form action="{{ url('crearempleado') }}" method="post">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">
                        Crear usuario
                    </h5>
                    <button aria-label="Close" class="close" data-dismiss="modal" type="button">
                        <span aria-hidden="true">
                            ×
                        </span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group row">
                        <div class="col-6">
                            <label>
                                Nombre
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="nombre" type="text">
                                </input>
                                <input class="typeahead" name="id" type="hidden" value="{{$id}}">
                                </input>
                                {{ csrf_field() }}
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Cedula
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="cedula" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Direccion
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="direccion" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Celular
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="celular" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Sexo
                            </label>
                            <div id="bloodhound">
                                <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="sexo">
                                    <option value="Masculino">
                                        Masculino
                                    </option>
                                    <option value="Femenino">
                                        Femenino
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Fecha Nacimiento
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="fecha_nacimiento" type="date">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Monto
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="monto" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Email
                            </label>
                            <div id="the-basics">
                                <input class="typeahead" name="email" type="text">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Password
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="password" type="password">
                                </input>
                            </div>
                        </div>
                        <div class="col-6">
                            <label>
                                Confirmación Password
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="password_confirmation" type="password">
                                </input>
                            </div>
                        </div>
                        <div class="col-12">
                            <label>
                                Admin
                            </label>
                            <div id="bloodhound">
                                <select class="form-control form-control-sm" id="exampleFormControlSelect1" name="admin">
                                    <option value="1">
                                        Administrador
                                    </option>
                                    <option value="0">
                                        Usuario
                                    </option>
                                </select>
                            </div>
                        </div>
                        <div class="col-12" style="height: 25px;">
                        </div>
                        <div class="col-3">
                            <input class="btn btn-success" name="save" type="submit" value="Crear">
                            </input>
                        </div>
                        <div class="col-3">
                            <button class="btn btn-light" data-dismiss="modal" type="button">
                                Cerrar
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>
