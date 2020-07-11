@extends('layouts.menu')

@section('contenido')
<h1 class="title">Categorías.</h1>

	<div class="row" style="justify-content: flex-end;margin-bottom: 5px;">
    <a class="btnModal" data-idmodal="#divModal" href="{{ route('formcategorias') }}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-plus-circle"></i> Crear Categoría</button> </a>
    
</div>
<br>
<div>
        <div class="form-group{{ $errors->has('img') ? ' has-error' : '' }}">
                @if ($errors->has('img'))
                <span class="help-block badge col-red">
                    <strong>{{ $errors->first('img') }}</strong>
                </span>
            @endif
        </div>
    <div>
       <div class="table-responsive">
            <div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-left: 10px;">
                    <a   href="{{ route('AllCategoriasPDF') }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
                    <a   href="{{ route('CategoriasExport') }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
                    
                </div>
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Foto
                        </th>
                        <th>
                            Editar
                        </th>
                        <th>
                                Estado
                            </th>
                        <th>
                            Bloquear / Activar
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categorias as $data)
                    <tr>
                        <td>
                            {{$data->descripcion}}
                        </td>
                        <td>
                            <img alt="logo {{$data->descripcion}}" class="img-lg rounded-circle" src="{{$data->img}}" style="width: 50px; height: 50px;"/>
                        </td>
                        <td>
                        	<a class="btnModal" data-idmodal="#divModal" href="{{ route('formeditarcategoria',[$data->id]) }}">
                                <button class="badge badge-primary">Editar</button>
                            </a>
                        </td>
                        <td>
                                @if ($data->estado == 1)
                                Activo
                                @endif
                                @if ($data->estado != 1)
                               Desactivado
                                @endif
                        </td>
                        <td>
                            @if ($data->estado == 1)
                            
                            
                            <a href="{{ route('estadocategoria',[$data->id,0]) }}"><label class="badge badge-danger" >Desactivar</label></a>
                            @endif
                            @if ($data->estado != 1)
                            
                            <a href="{{ route('estadocategoria',[$data->id,1]) }}"><label class="badge badge-success" >Activar</label></a>
                            @endif
                                
                                
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                 <tfoot>
            <tr>
                    <tr>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Foto
                            </th>
                            <th>
                                Editar
                            </th>
                            <th>
                                    Estado
                                </th>
                            <th>
                                Bloquear / Activar
                            </th>
                           
                        </tr>
        </tfoot>
            </table>
        </div>
    </div>
    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
    </div>
</div>
@endsection
@section('script')

    <script src="{{URL::asset('assets/js/table.min.js')}}"></script>
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/dataTables.buttons.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.flash.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/jszip.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/pdfmake.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/vfs_fonts.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.html5.min.js')}}"></script> --}}
    {{-- <script src="{{URL::asset('assets/js/bundles/export-tables/buttons.print.min.js')}}"></script> --}}
    <script src="{{URL::asset('assets/js/pages/tables/jquery-datatable.js')}}"></script>

@endsection
