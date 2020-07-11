@extends('layouts.menu')

@section('contenido')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Nuevo Interes</h1>
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
                        	<form method="POST" action="{{route('interes.store')}}">
                                {{ csrf_field() }}
                                <div class="form-group col-lg-4">
                                    <label>Nombre</label>
                                    <input class="form-control" type="text" name="descripcion" required>
                                    {!! $errors->first('descripcion')!!}
                                </div>

                                <button type="submit" class="btn btn-primary">Crear</button>
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
    <!-- /.row -->
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
