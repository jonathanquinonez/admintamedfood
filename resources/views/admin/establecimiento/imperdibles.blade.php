@extends('layouts.menu')

@section('contenido')
<h1 class="title">Imperdibles.</h1>

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
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Posición
                        </th>
                        <th>
                            Actualizar
                        </th>
                        <th>
                            Nombre
                        </th>
                        <th>
                            Foto
                        </th>
                        <th>
                            Desactivar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($imperdibles as $data)
                    <tr>
                        <form method="get" action="{{url('actualizarimp')}}">
                        <td>
                            {{$data->rank}}
                            <input type="hidden" value="{{$data->id}}" name="id">
                        </td>
                        <td>
                            <input type="number" name="rank" min="1" max="{{$ranks}}">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                        </td>
                        </form>
                        <td>
                           {{$data->nombre}} 
                        </td>
                        <td>
                            <img alt="logo {{$data->img_destacada}}"  src="{{$data->img_destacada}}" style="width: 200px;"/>
                        </td>
                        
                        <td>
                            @if ($data->destacado == 1)
                            <a href="{{ route('desactivarimperdible',[$data->id]) }}"><label class="badge badge-danger" >Desactivar</label></a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                 <tfoot>
            <tr>
                    <tr>
                            <th>
                                Posicion
                            </th>
                            <th>
                                Actualizar
                            </th>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Foto
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
