@extends('layouts.menu')

@section('contenido')

<div id="app">
<email></email>
<br>
<div class="row">
        @if(Session::has('exito'))
        <br>
            <span class="help-block badge col-green">
                <strong>Enviado con exito</strong>
            </span>
            <br>
            @endif
            @if(Session::has('error'))
            <br>
            <span class="help-block badge col-red">
                <strong>Ocurrio un error</strong>
            </span>
            <br>
            @endif
        </div>
</div>
@endsection
@section('script')
<script src="{{ asset('js/app.js')}}"></script>
@endsection
