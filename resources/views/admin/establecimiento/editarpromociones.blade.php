@extends('layouts.menu')
@section('contenido')
<div class="row">
        @foreach ($promociones as $item1)
        <h1 class="title center ml-3">
            {{$item1->establecimiento}}
        </h1>
    
    </div>
    <h5 class="title"> Editar promoción</h5>
    <div class="modal-body ml-3">
        <div class="form-group row">
            
                <div class="row">
                    
                <div class="col-12">
                        <div class="row" style="justify-content: flex-end;margin-bottom: 5px; margin-right: 10px;">
                                <a  class="btnModal" data-idmodal="#divModal"  href="{{ route('formagregarproducto',[$item1->id_establecimiento,$item1->id]) }}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-plus-circle"></i>Agregar producto</button> </a>
                                
                            </div>
                        <div class="table-responsive">
                                <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                                   <thead>
                                       <tr>
                                            <th>
                                                Imagen
                                            </th>
                                           <th>
                                               Nombre
                                           </th>
                                           <th>
                                               Eliminar
                                           </th>
                                       </tr>
                                   </thead>
                                   <tbody>
                                       @foreach ($productos as $item)
                                       <tr>
                                           <td>
                                               <img src="{{$item->imagen}}" alt="" width="70px" height="70px">
                                               
                                           </td>
                                           <td>
                                               {{ucwords($item->nombre)}}
                                           </td>
                                           
                                           {{-- <td>
                                               <a href="{{ route('empresadetalle',[$item->id]) }}">
                                                  <label class="badge badge-success">Ver</label>
                                               </a>
                                           </td> --}}
                                           <td>
                                               <a  href="{{ route('eliminarproductopromocion',[$item->id_producto,$item->id_promocion]) }}">
                                                   <button class="badge badge-danger">Eliminar</button>
                                               </a>
                                           </td>
                                       </tr>
                                       @endforeach
                                   </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>
                                                Imagen
                                            </th>
                                            <th>
                                                Nombre
                                            </th>
                                          
                                            <th>
                                                Eliminar
                                            </th>
                                        </tr>
                           </tfoot>
                               </table>
                         </div>
                </div>
              <br>
              <form action="{{ url('editarpromocion') }}" enctype="multipart/form-data" method="POST" autocomplete="off">
                {{ csrf_field() }}
                <div class="row">
                <div class="col-12 mt-5">
                        {{-- <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}"> --}}
                            <label>
                                Descripción
                            </label>
                            <div id="bloodhound">
                            <input type="hidden" name="id" value="{{$item1->id}}">
                                <textarea class="form-control no-resize" name="descripcion" rows="5" cols="50" placeholder="Descripcion de la promoción" required="" type="text" >{{$item1->descripcion}}{{ old('descripcion') }}</textarea>
                                {{-- @if ($errors->has('descripcion'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                            @endif --}}
                            </div>
                        {{-- </div> --}}
                </div>
                <br>
                <div class="col-12">
                   <br> 
                <img height="100" width="100" src="{{$item1->img}}" alt="{{$item1->img}}">
                        
                </div>
                <div class="col-12">
                        <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                            <label>
                                Imagen de promocion
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="img" type="file">
                                @if ($errors->has('img'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('img') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                </div>
                <div class="col-12">
                    
                   
                        <input class="btn btn-primary" name="actualizar"  type="submit" value="Editar">
                        
                </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <div class="row  mr-2" style="justify-content: flex-end ;">
    <a class="btn btn-info pt-2" href="{{route('promociones',[$item1->id_establecimiento])}}"  >Volver</a>
                    
                </div>
                @endforeach

@endsection
<div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    </div>
@section('script')
    <script>
    document.querySelector('input[list]').addEventListener('input', function(e) {
    var input = e.target,
        list = input.getAttribute('list'),
        options = document.querySelectorAll('#' + list + ' option'),
        hiddenInput = document.getElementById(input.id + '-hidden'),
        inputValue = input.value;

    hiddenInput.value = inputValue;

    for(var i = 0; i < options.length; i++) {
        var option = options[i];

        if(option.innerText === inputValue) {
            hiddenInput.value = option.getAttribute('data-value');
            break;
        }
    }
});</script>
@endsection