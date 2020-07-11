@extends('layouts.menu')

@section('contenido')
<div class="title">
    <h1 class="title">Super Administradores</h1>
</div>
<div class="row" style="justify-content: flex-end;margin-bottom: 5px; margin-right: 10px;">
        <a   href="{{ route('formcrearsuperusuario') }}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-plus-circle"></i> Crear administrador</button> </a>
        
    </div>
<div class="table-responsive">
        <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
           <thead>
               <tr>
                  
                   <th>
                       Nombre
                   </th>
                  
                   <th>
                       Correo
                   </th>
                   <th>
                    Estado
                </th>
                  
                   <th>
                      Editar
                   </th>
                   <th>
                    Activar / Desactivar
                 </th>
                   
               </tr>
           </thead>
           <tbody>
               @foreach ($admin as $item)
               <tr>
                   <td>
                       {{$item->nombre}}
                   </td>
                   {{-- <td>
                       <img alt="logo {{$empresa->nombre}}" class="img-lg rounded-circle" src="{{$empresa->logo}}" style="width: 50px; height: 50px;"/>
                   </td> --}}
                   
                   <td>
                       {{$item->email}}
                   </td>
                   <td>
                   @if ($item->bloqueado == 1)
                       Desactivado
                   @endif
                   @if ($item->bloqueado == 0)
                       Activado
                   @endif
                </td>
                   <td>
                   <a  href="{{route('formeditarsuperusuario',[$item->id])}}">
                           <button class="badge badge-warning">Editar</button>
                       </a>
                   </td>
                   <td>

                        @if ($item->bloqueado == 1)
                        <a  href="{{route('desactivaradmin',[$item->id])}}">
                                <button class="badge badge-success">Activar</button>
                            </a>
                    @endif
                    @if ($item->bloqueado == 0)
                    <a  href="{{route('activaradmin',[$item->id])}}">
                            <button class="badge badge-danger">Desactivar</button>
                        </a>
                    @endif
                    
                        
                    </td>
               </tr>
               @endforeach
           </tbody>
            <tfoot>
                <tr>
                  
                    <th>
                        Nombre
                    </th>
                   
                    <th>
                        Correo
                    </th>
                    <th>
                     Estado
                 </th>
                   
                    <th>
                       Editar
                    </th>
                    <th>
                     Activar / Desactivar
                  </th>
                    
                </tr>
   </tfoot>
       </table>
 </div>
@endsection

@section('script')
<script src="{{URL::asset('assets/js/table.min.js')}}"></script>

<script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>

@endsection