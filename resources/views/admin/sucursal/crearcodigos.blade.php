@extends('layouts.menu')

@section('contenido')

<h3 class="title">Cargar Códigos "{{$sucursal}}"</h3>
<br> 
<a href="https://bitumovil.com/wp-content/uploads/2016/Codigos.xls" download="Codigos"> 
        <img  width="100" src="https://aprendercompartiendo.com/wp-content/uploads/2018/10/descargar-download-tipos-directa-p2p-2.png">
    </a>
<form method="POST" action="{{route('Codigoscsv')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="form-group row">
                

                <div class="col-12">
                        <div class="form-group{{ $errors->has('csv') ? ' has-error' : '' }}">
                            <label>
                                Archivo xls
                            </label>
                            <div id="bloodhound">
                                <input class="typeahead" name="csv" type="file" required="" accept=".xls">
                                @if ($errors->has('csv'))
                                <span class="help-block badge col-red">
                                    <strong>{{ $errors->first('csv') }}</strong>
                                </span>
                            @endif
                            </div>
                        </div>
                    <input class="typeahead" name="id" type="text" hidden required="" value="{{$id_sucursal}}">

                </div>
                <div class="col-4" style="margin-top: 10px;">
                   
                    
                        <input class="btn btn-success" name="save" type="submit" value="Cargar códigos">
                       
                    </div>
                   
                   
                </div>
                <div class="row" style="justify-content: flex-end ;">
                    <a class="btn btn-info pt-2" href="{{route('codigospromocionales',[$id_sucursal])}}"  >Volver</a>
                            
                        </div>
            </div>
            
</form>

@endsection
@section('script')
    
@endsection