@extends('layouts.menu')
@section('css')
@endsection
@section('contenido')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Generar Códigos</h1>
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
                    <div class="form-group col-lg-12">
                    	<form method="POST" action="">
                            {{ csrf_field() }}
                            <div class="form-group col-lg-6">
                                <label>Cantidad de Códigos</label>
                                <input class="form-control" type="number" name="cantidad" old="cantidad" required>
                                {!! $errors->first('Cantidad')!!}
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Longitud</label>
                                <input class="form-control" type="number" name="longitud" min="8" max="15" required>
                                {!! $errors->first('Longitud')!!}
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Prefijo</label>
                                <input class="form-control" type="text" name="prefijo">
                                {!! $errors->first('Prefijo')!!}
                            </div>
                            <div class="form-group col-lg-6">
                                <label>Sufijo</label>
                                <input class="form-control" type="text" name="sufijo">
                                {!! $errors->first('Sufijo')!!}
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

@endsection
