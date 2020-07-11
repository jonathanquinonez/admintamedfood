@extends('layouts.menu')

@section('contenido')
<h1 class="title">Intereses</h1>

<br>
<a class="btn btn-primary" href="{{route('crearinteres')}}"><i class="fa fa-plus"> Nuevo Interes</i></a>
<div>
            @if (session()->has('info'))

                <div class="alert alert-success">{{session('info')}}</div>

            @endif
    <div>
       <div class="table-responsive">
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            ID
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Estado
                        </th>
                        <th>
                            Desactivar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($intereses as $data)
                    <tr>
                        <td>
                            {{$data->id}}
                            <input type="hidden" value="{{$data->id}}" name="id">
                        </td>
                        <td>
                           {{$data->descripcion}} 
                        </td>
                        <td>
                            @if ($data->estado == "0")
                            Inactivo
                            @endif
                            @if ($data->estado == "1")
                            Activo
                            @endif
                        </td>
                        <td>
                            @if ($data->estado == "1")
                            <a href="{{ route('desactivarinteres',[$data->id]) }}"><label class="badge badge-danger" >Desactivar</label></a>
                            @endif
                            @if ($data->estado == "0")
                            <a href="{{ route('activarinteres',[$data->id]) }}"><label class="badge badge-success" >Activar</label></a>
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
                            Nombre
                        </th>
                        <th>
                            Estado
                        </th>
                        <th>
                            Desactivar
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
