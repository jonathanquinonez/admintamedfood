@extends('layouts.menu')

@section('contenido')
<div id="app">
<push></push>
</div>
@endsection
@section('script')
<script src="{{ URL::asset('js/app.js')}}"></script>
@endsection
