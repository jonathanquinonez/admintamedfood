@extends('layouts.menu')

@section('css')


@endsection
@section('contenido')
<h1>
   Ventas
</h1>
           <div id="app">

                <ventas></ventas>
                </div>
@endsection

@section('script')
 
<script src="{{ asset('js/app.js')}}"></script>
@endsection






