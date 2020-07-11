@extends('layouts.menu')

@section('contenido')
    <h2 class="title">Información App</h2>
   
    <form action="{{route('editarinfoapp')}}" method="POST" enctype="multipart/form-data">
        {{ csrf_field() }}
<div class="row">
   
 
    
         <div class="col-sm-12">
                <div class="file-field input-field">
                    <div >
                        <span>Teléfono</span>
                    <input type="text"name="telefono" value="{{$telefono}}">
                    </div>
                    
                </div>
        </div>
        <div class="col-sm-12">
                <div class="file-field input-field">
                    <div >
                        <span>Correo</span>
                        <input type="email"name="correo" value="{{$correo}}">
                    </div>
                    
                </div>
        </div>
        <div class="col-sm-12">
                <div class="file-field input-field">
                    <div >
                        <span>Dirección</span>
                        <input type="text"name="direccion" value="{{$direccion}}">
                    </div>
                    
                </div>
        </div>
        <div class="col-sm-12">
            <div class="file-field input-field">
                <div >
                    <span>Logo</span>
                    <img src="{{$logo}}" height="100" width="100">
                </div>
                
            </div>
    </div>
        <div class="col-sm-12">
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="logo">
                    </div>
                    <div class="file-path-wrapper">
                        <input class="file-path validate" type="text" name="logo">
                    </div>
                </div>
        </div> 
        <div class="col-sm-12">
        <input class="btn btn-success" type="submit" value="Guardar">    
        </div>        
</div>
</form>
  
    
@endsection