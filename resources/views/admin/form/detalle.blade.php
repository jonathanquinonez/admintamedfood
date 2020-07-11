@extends('layouts.menu')

@section('contenido')
<div class="col-lg-12">
    <div class="card px-3">
        <div class="card-body">
            <h4 class="card-title">
            	@foreach ($formularios as $data)
            		{{$data->titulo_formulario}}
            	
               
            </h4>
            <div class="row" style="justify-content: flex-end;margin-bottom: 5px; margin-right: 10px;">
                
                    <a class="btnModal" data-idmodal="#divModal" href="{{ route('verformpreguntacrear',[$data->id]) }}"><button class="add btn btn-primary font-weight-bold todo-list-add-btn" id="add-task">
                      <i class="fa fa-plus"></i>  Agregar pregunta
                    </button></a>
               
            </div>
@endforeach
<h4 class="title">Preguntas</h4>
            <div class="table-responsive">
             <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                            Pregunta
                        </th>
                        <th>
                        	Editar
                        </th>
                        <th>
                           Eliminar
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($preguntas as $data)
                    <tr>
                        <td>
                            {{$data->pregunta}}
                        </td>
                        <td>
                            <a class="btnModal" data-idmodal="#divModal" href="{{ route('verformepreguntaditar',[$data->id]) }}">
                               <label class="badge badge-warning">Editar</label>
                            </a>
                        </td>
                        <td>
 							<a class="btnModal" data-idmodal="#divModal" href="{{ route('verformpreguntaeliminar',[$data->id]) }}">
                               <label class="badge badge-danger">Eliminar</label>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                        <tr>
                                <th>
                                    Pregunta
                                </th>
                                <th>
                                    Editar
                                </th>
                                <th>
                                   Eliminar
                                </th>
                            </tr>
                </tfoot>
                 
            </table>
        </div>
        </div>
        <h4 class="title">Respuestas</h4>
        <div class="table-responsive">
                <table id="tableExport" class="display table table-hover table-checkable order-column m-t-20 width-per-100">
                <thead>
                    <tr>
                        <th>
                             Pregunta
                        </th>
                        <th>
                           Respuesta
                        </th>
                        
                       
                    </tr>
                </thead>
                <tbody>
                   @foreach ($respuestas as $item1)
                       {{-- expr --}}
                   
                    <tr>
                        <td>
                           {{$item1->pregunta}}
                        </td>
                        <td>
                           {{$item1->respuesta}}
                        </td>
                          
                    </tr>
                  @endforeach
                </tbody>
                <tfoot>
                        <tr>
                                <th>
                                     Pregunta
                                </th>
                                <th>
                                   Respuesta
                                </th>
                                
                               
                            </tr>
                </tfoot>
            </table>
        </div>  
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
