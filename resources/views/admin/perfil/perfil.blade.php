@extends('layouts.menu')

@section('contenido')

	 <h1 class="title">Administrador</h1>

  <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="project" aria-expanded="true">
                            <div class="row clearfix">
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        @if (session()->has('info'))

                                            <div class="alert alert-success">{{session('info')}}</div>
                
                                        @endif
                                        <div class="header">
                                            <h2>Datos basicos</h2>
                                        </div>
                                        <div class="body">
                                        	<form class="login100-form validate-form" action="{{ route('cambiarcorreo') }}" method="POST">
                                        		 {{ csrf_field() }}
                                        		  
                                            <div class="row">
                                            	@foreach ($user as $data) 
                                                <div class="col-md-4 col-6 b-r">
                                                    <strong>Nombre</strong>
                                                    <br>
                                                    <p class="text-muted">{{$data->nombre}}</p>
                                                </div>
                                               
                                              
                                                 <div class="col-md-4 col-6 b-r">
                                                    <strong>Correo</strong>
                                                    <br>
                                                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                        <p class="text-muted">{{$data->email}}</p>
                                                    <!--<input class="text-muted" required=""  type="email" name="email"  value="{{$data->email}}">-->
                                                    @if ($errors->has('email'))
						                                    <span class="help-block badge col-red">
						                                        <strong>{{ $errors->first('email') }}</strong>
						                                    </span>
						                                @endif
                                                    </div>
                                                </div>
                                                <!--<div class="col-md-12 col-6">-->
                                                <!--	<button class="btn btn-success">Actualizar</button>-->
                                                <!--</div>-->
                                                @endforeach
                                            </div>

</form>
                                         
                                        </div>
                                    </div>
                                </div>
                                <form class="login100-form validate-form" action="{{ route('cambiarcontrasena') }}" method="POST">
                                        		 {{ csrf_field() }}
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="card project_widget">
                                        <div class="header">
                                            <h2>Cambiar contraseña</h2>
                                        </div>
                                        <div class="body">
                                            <div class="row">
                                                <div class="col-md-4 col-6 b-r">
                                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                    <strong>Contraseña antigua</strong>
                                                    <br>
                                                    <input class="text-muted" type="password" required="" name="password" value="">
                                                    @if ($errors->has('password'))
						                                    <span class="help-block badge col-red">
						                                        <strong>{{ $errors->first('password') }}</strong>
						                                    </span>
						                                @endif
                                                </div>
                                                </div>
                                              <div class="col-md-4 col-6 b-r">
                                                    <strong>Contraseña nueva</strong>
                                                    <br>
                                                    <input required="" class="text-muted" type="password" name="primero" value="">
                                                </div>
                                                            
                                                <div class="col-md-4 col-6 b-r">
                                                	 <div class="form-group{{ $errors->has('passworddiferente') ? ' has-error' : '' }}">
                                                    <strong>Repetir contraseña</strong>
                                                    <br>
                                                    <input class="text-muted" type="password" required="" name="segundo"value="">
                                                    @if ($errors->has('passworddiferente'))
						                                    <span class="help-block badge col-red">
						                                        <strong>{{ $errors->first('passworddiferente') }}</strong>
						                                    </span>
						                                @endif
                                                </div>
                                                </div>
                                                <div class="col-md-3 col-6">
                                                	<button class="btn btn-success">Actualizar</button>
                                                </div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>

                       
                    </div>


@endsection