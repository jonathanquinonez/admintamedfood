@extends('layouts.menu')

@section('contenido')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Editar Usuario - {{$user->nombre}}</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        @if (session()->has('info'))

                            <div class="alert alert-success">{{session('info')}}</div>

                        @endif
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <form method="POST" action="{{route('editarcorreousuario')}}">
                                        {{ csrf_field() }}
                                        <div class="form-group">
                                            <label>Nombre:</label>
                                            <input class="form-control" type="text" name="nombre" value="{{$user->nombre}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail Antiguo:</label>
                                            <input class="form-control" type="email" name="emailold" value="{{$user->email}}" readonly>
                                        </div>
                                        <div class="form-group">
                                            <label>Nuevo E-mail:</label>
                                            <input class="form-control" type="email" name="email" required>
                                        </div>
                                        
                                        <input type="hidden" name="id" value="{{$user->id}}">

                                        <button type="submit" class="btn btn-primary">Actualizar Usuario</button>
                                        <button type="reset" class="btn btn-secondary">Reset</button>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
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
