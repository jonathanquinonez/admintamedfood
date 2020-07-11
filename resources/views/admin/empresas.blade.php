@extends('layouts.menu')

@section('css')


@endsection
@section('contenido')
<h1 class="title">
    Entidades

</h1>
<div class="row" style="justify-content: flex-end;margin-bottom: 5px; margin-right: 10px;">
    <a   href="{{ route('mostrarform') }}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-plus-circle"></i> Crear Entidad</button> </a>
    
</div>
<div class="row" style="justify-content: flex-start ;margin-bottom: 5px; margin-right: 10px;">
    <a   href="{{ route('AllEmpresasPDF') }}" ><button class="dt-button buttons-print m-1 pl-3 pr-3" style="width:inherit !important">PDF</button> </a>
    <a   href="{{ route('empresasexcel') }}" ><button class="dt-button buttons-excel buttons-html5 m-1 pl-3 pr-3" style="width:inherit !important">Excel</button> </a>
    
</div>



   
        <div class="table-responsive">
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                             Id
                        </th>
                        <th>
                             Código único
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Siglas
                        </th>
                        <th>
                            NIT
                        </th>
                        <th>
                            Tipo entidad
                        </th>
                        <th>
                            Ciudad
                        </th>
                        <th>
                            Ver
                        </th>
                        <th>
                            Editar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($empresas as $empresa)
                    <tr>
                        <td>
                            {{$empresa->id}}
                        </td>
                        <td>
                            {{$empresa->codigo_unico}}
                        </td>
                        {{-- <td>
                            <img alt="logo {{$empresa->nombre}}" class="img-lg rounded-circle" src="{{$empresa->logo}}" style="width: 50px; height: 50px;"/>
                        </td> --}}
                        <td>
                            {{$empresa->nombre}}
                        </td>
                        <td>
                            {{$empresa->nombre_corto}}
                        </td>
                        <td>
                            {{$empresa->nit}}
                        </td>
                        <td>
                            {{ucwords($empresa->tipo)}}
                        </td>
                        <td>
                            {{ucwords($empresa->ciudad)}}
                        </td>
                        <td>
                            <a href="{{ route('empresadetalle',[$empresa->id]) }}">
                               <label class="badge badge-success">Ver</label>
                            </a>
                        </td>
                        <td>
                            <a  href="{{ route('empresa',[$empresa->id]) }}">
                                <button class="badge badge-warning">Editar</button>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                 <tfoot>
             <tr>
                        <th>
                            Id
                        </th>
                        <th>
                            Código único
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Siglas
                        </th>
                        <th>
                            NIT
                        </th>
                        <th>
                            Tipo entidad
                        </th>
                        <th>
                            Ciudad
                        </th>
                        <th>
                            Ver
                        </th>
                        <th>
                            Editar
                        </th>
                    </tr>
        </tfoot>
            </table>
      </div>


    <div aria-hidden="true" class="modal fade" id="myModal" role="dialog" tabindex="-1">
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






