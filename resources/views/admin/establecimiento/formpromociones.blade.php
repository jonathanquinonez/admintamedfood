@extends('layouts.menu')
@section('contenido')
<div class="row grid-margin">
        @foreach ($datas1 as $data1)
        <h1 class="title center ml-3">
            {{$data1->nombre}}
        </h1>
    
    </div>
    <h4 class="title"> Crear promoción</h4>


    <div class="modal-body">
        <div class="form-group row">
            <form action="{{ url('crearpromocion') }}" enctype="multipart/form-data" method="POST" autocomplete="off">
                {{ csrf_field() }}
                <div class="row">
              
                <div class="col-12 mt-5">
                        <div class="form-group{{ $errors->has('correo') ? ' has-error' : '' }}">
                            <label>
                                Descripción
                            </label>
                            <div id="bloodhound">
                            <input type="hidden" name="id_establecimiento" value="{{$data1->id}}">
                                <textarea class="form-control no-resize" name="descripcion" rows="5" cols="50" placeholder="Descripcion de la promoción" required="" type="email" >{{ old('descripcion') }}</textarea>
                                @if ($errors->has('descripcion'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('descripcion') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                </div>
                <div class="col-12">
                        <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                            <label>
                                Imagen de promoción
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="img" type="file" required="">
                                @if ($errors->has('img'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('img') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                </div>
                <div class="col-12">
                    
                   
                        <input class="btn btn-success" name="actualizar"  type="submit" value="Crear">
                        
                </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row  mr-2" style="justify-content: flex-end ;">
    <a class="btn btn-info pt-2" href="{{route('promociones',[$data1->id])}}"  >Volver</a>
                    
                </div>
                @endforeach

@endsection

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