@extends('layouts.menu')

@section('contenido')
<h1>
    Empresas
</h1>

       <div class="table-responsive">
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Order #
                        </th>
                        <th>
                            Foto
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Nombre Corto
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
                            {{$empresa->codigo_unico}}
                        </td>
                        <td>
                            <img alt="logo {{$empresa->nombre}}" class="img-lg rounded-circle" src="{{$empresa->logo}}" style="width: 50px; height: 50px;"/>
                        </td>
                        <td>
                            {{$empresa->nombre}}
                        </td>
                        <td>
                            {{$empresa->nombre_corto}}
                        </td>
                        <td>
                            {{$empresa->ciudad}}
                        </td>
                        <td>
                            <a href="{{ route('empresadetalle',[$empresa->id]) }}">
                                <label class="badge badge-success">
                                    <i class="ti-eye">
                                    </i>
                                </label>
                            </a>
                        </td>
                        <td>
                            <a class="btnModal" data-idmodal="#divModal" href="{{ route('empresa',[$empresa->id]) }}">
                                <label class="badge badge-warning">
                                    <i class="ti-pencil">
                                    </i>
                                </label>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
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
