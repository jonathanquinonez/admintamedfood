@extends('layouts.menu')

@section('contenido')
@if ($resp == "1")
	<div class="alert alert-success">
                                <strong>Se envio correctamente!</strong>
                            </div>
@endif
@if ($resp == "0")
	<div class="alert alert-Warning">
                                <strong>Error al enviar!</strong>
                            </div>
@endif

<div id="app">
<sms></sms>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('js/app.js')}}"></script>
@endsection
