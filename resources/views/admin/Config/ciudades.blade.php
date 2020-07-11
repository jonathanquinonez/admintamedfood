@extends('layouts.menu')

@section('contenido')
    <H1 class="title">Ciudades</H1>
    <div class="row" style="justify-content: flex-end;margin-bottom: 5px; margin-right: 10px;">
            <a  class="btnModal" data-idmodal="#divModal" href="{{ route('formcrearciudades') }}" ><button class="add btn btn-primary font-weight-bold todo-list-add-btn"><i class="fa fa-plus-circle"></i> Crear Ciudad</button> </a>
            
        </div>
        <br>
    <div class="table-responsive">
            <div class="form-group{{ $errors->has('descripcion') ? ' has-error' : '' }}">
                    
                    
                    @if ($errors->has('descripcion'))
                        <span class="help-block badge col-red">
                        <strong>{{ $errors->first('descripcion') }}</strong>
                    </span>
                    @endif
            </div>
            <div class="form-group{{ $errors->has('codigo') ? ' has-error' : '' }}">
                    
                    
                    @if ($errors->has('codigo'))
                        <span class="help-block badge col-red">
                        <strong>{{ $errors->first('codigo') }}</strong>
                    </span>
                    @endif
            </div>
                        
            <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
               <thead>
                   <tr>
                       <th>
                            Ciudad
                       </th>
                       <th>
                           Código
                       </th>
                       <th>
                            Editar
                        </th>
                   </tr>
               </thead>
               <tbody>
                   @foreach ($data as $item)
                   <tr>
                       
                       <td>
                           {{ucwords($item->descripcion)}}
                       </td>
                       <td>
                           {{$item->codigo}}
                       </td>
                       <td>
                            <a class="btnModal" data-idmodal="#divModal" href="{{ route('formeditarciudades',[$item->id]) }}">
                                    <button class="badge badge-warning">Editar</button>
                                </a>
                       </td>

                   </tr>
                   @endforeach
               </tbody>
                <tfoot>
            <tr>
                       <th>
                           Ciudad
                       </th>
                       <th>
                           Codigo
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