@extends('layouts.menu')
@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/colors.css')}}">
@endsection
@section('contenido')
<div class="content-wrapper">
    <div class="content-header row">
    </div>
    <div class="content-body">
        <!-- page users view start -->
        <section class="page-users-view">
            <div class="row">
                <!-- account start -->
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card-title">Informción de Usuario</div>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="users-view-image">
                                    <img src="{{URL::asset('assets/app-assets/images/portrait/small/avatar-s-12.jpg')}}" class="users-avatar-shadow w-100 rounded mb-2 pr-2 ml-1" alt="avatar">
                                </div>
                                <div class="col-12 col-sm-9 col-md-6 col-lg-5">
                                    <table>
                                        <tr>
                                            <td class="font-weight-bold">Username</td>
                                            <td>adoptionism744</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Name</td>
                                            <td>{{$dataUser->name}}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Email</td>
                                            <td>angelo@sashington.com</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12 col-md-12 col-lg-5">
                                    <table class="ml-0 ml-sm-0 ml-lg-0">
                                        <tr>
                                            <td class="font-weight-bold">Status</td>
                                            @if($dataUser->bloqueado == 0)
                                            <td>active</td>
                                            @endif
                                            @if($dataUser->bloqueado == 1)
                                            <td>inactivo</td>
                                            @endif
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Role</td>
                                            <td>admin</td>
                                        </tr>
                                        <tr>
                                            <td class="font-weight-bold">Company</td>
                                            <td>WinDon Technologies Pvt Ltd</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-12">
                                    <a href="{{route('editarPerfil',[$dataUser->id])}}" class="btn btn-primary mr-1"><i class="feather icon-edit-1"></i> Editar</a>
                                     </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- account end -->
              
                <!-- permissions end -->
            </div>
        </section>
        <!-- page users view end -->

    </div>
</div>
@endsection

@section('script')
<script src="{{URL::asset('app-assets/js/scripts/pages/app-user.js')}}"></script>

@endsection
