@extends('layouts.menu')
@section('contenido')
    
    @foreach ($empresas as $data)
<div class="row grid-margin">
    <img alt="logo {{$data->nombre}}" class="img-lg rounded-circle" src="{{$data->logo}}" style="width: 50px; height: 50px; margin-right: 10px;"/>
    <center>
        <h1 class="title center">
            {{$data->nombre}}
        </h1>
    </center>
</div>
<div class="col-md-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">
                Restringir Empresas
            </h4>
            <p class="card-description">
            </p>
            <form class="forms-sample">
                <div class="row">
                    @foreach ($establecimientos as $data)
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="form-check form-check-flat">
                                <label class="form-check-label">
                                    <input checked="" class="form-check-input" type="checkbox">
                                        {{$data->nombre}}
                                    </input>
                                </label>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </form>
        </div>
    </div>
</div>
@endforeach

@endsection
