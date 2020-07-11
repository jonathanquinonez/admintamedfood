@extends('layouts.menu')
@section('contenido')
<div class="row grid-margin">
    @foreach ($datas1 as $data1)
    <h1 class="title center ml-3">
        {{$data1->nombre}}
    </h1> 
   
</div>
<h5>
    Listado de promociones
</h5>
<div class="row" style="justify-content: flex-end;margin-bottom: 7px;">
        <a href="{{ route('formcrearpromocion',[$data1->id]) }}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"></i> Crear promoción</button> </a>
        
    </div>
  
<div class="table-responsive">
<table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
    <thead>
        <tr>
            <th>
                ID
            </th>
            
            <th>
                descripcion
            </th>
             <th>
                establecimiento
            </th>
            <th>
               Estado
            </th>
            <th>
                    Editar
            </th>
             
            <th>
               Activar|Desactivar
            </th>
         
            
        </tr>
    </thead>
    <tbody>
        @foreach ($promociones as $data)
        <tr>
            <td>
                {{$data->id}}
            </td>
           
            <td>
                {{$data->descripcion}}
            </td>
            <td>
                {{$data->establecimiento}}
            </td>
            <td>
             @if($data->bloqueado == 0)
           Activo
             @endif
             @if($data->bloqueado == 1)
             Inactivo
             @endif
            </td>
            <td>
              
            <a href="{{route('formeditarpromocion',[$data->id])}}"><label class="badge badge-primary">Editar</label></a>
            </td>
            
            <td>
            @if($data->bloqueado == 0)
             <a  href="{{route('desactivarpromocion',[$data->id])}}"><label class="badge btn-danger">Desactivar</label></a>
             @endif
             @if($data->bloqueado == 1)
             <a  href="{{route('activarpromocion',[$data->id])}}"><label class="badge btn-success">Activar</label></a>
             @endif
            </td>
            
        </tr>
        @endforeach
    </tbody>
    <tfoot>
            <tr>
                    <th>
                        ID
                    </th>
                    
                    <th>
                        descripcion
                    </th>
                     <th>
                        establecimiento
                    </th>
                    <th>
               Estado
            </th>
                    <th>
                            Editar
                        </th>
              
            <th>
               Activar|Desactivar
            </th>
                    
                </tr>
    </tfoot>
</table>
</div>
<div class="row  mr-2" style="justify-content: flex-end ;">
        <a class="btn btn-info pt-2" href="{{route('volverestablecimiento',[$data1->id])}}"  >Volver</a>
                        
                    </div>
                    @endforeach
@endsection

@section('script')
<script src="{{URL::asset('assets/js/table.min.js')}}"></script>
<script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>



@endsection