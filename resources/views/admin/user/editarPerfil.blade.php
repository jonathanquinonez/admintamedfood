@extends('layouts.menu')

@section('css')
<link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/colors.css')}}">
@endsection

@section('contenido')
      
        <div class="content-wrapper">
            <div class="content-header row"></div>
            <div class="content-body">
                <!-- users edit start -->
                <section class="users-edit">
                    <div class="card">
                        <div class="card-content">
                            <div class="card-body">
                                <ul class="nav nav-tabs mb-3" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link d-flex align-items-center active" id="account-tab" data-toggle="tab" href="#account" aria-controls="account" role="tab" aria-selected="true">
                                            <i class="feather icon-user mr-25"></i><span class="d-none d-sm-block">Account</span>
                                        </a>
                                    </li>
                                    
                                   
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="account" aria-labelledby="account-tab" role="tabpanel">
                                        <!-- users edit media object start -->
                                        <div class="media mb-2">
                                            <a class="mr-2 my-25" href="#">
                                                <img src="{{URL::asset('assets/app-assets/images/portrait/small/avatar-s-18.jpg')}}" alt="users avatar" class="users-avatar-shadow rounded" height="90" width="90">
                                            </a>
                                            <div class="media-body mt-50">
                                                <h4 class="media-heading">Angelo Sashington</h4>
                                                <div class="col-12 d-flex mt-1 px-0">
                                                    <a href="#" class="btn btn-primary d-none d-sm-block mr-75">Change</a>
                                                    <a href="#" class="btn btn-primary d-block d-sm-none mr-75"><i class="feather icon-edit-1"></i></a>
                                                    <a href="#" class="btn btn-outline-danger d-none d-sm-block">Remove</a>
                                                    <a href="#" class="btn btn-outline-danger d-block d-sm-none"><i class="feather icon-trash-2"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- users edit media object ends -->
                                        <!-- users edit account form start -->
                                        <form novalidate>
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Username</label>
                                                            <input type="text" class="form-control" placeholder="Username" value="adoptionism744" required data-validation-required-message="This username field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>Name</label>
                                                            <input type="text" class="form-control" placeholder="Name" value="Angelo Sashington" required data-validation-required-message="This name field is required">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="controls">
                                                            <label>E-mail</label>
                                                            <input type="email" class="form-control" placeholder="Email" value="angelo@sashington.com" required data-validation-required-message="This email field is required">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">

                                                    <div class="form-group">
                                                        <label>Status</label>
                                                        <select class="form-control">
                                                            <option>Active</option>
                                                            <option>deactivated</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Role</label>
                                                        <select class="form-control">
                                                            <option>Admin</option>
                                                            <option>User</option>
                                                            <option>Staff</option>
                                                        </select>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Company</label>
                                                        <input type="text" class="form-control" value="WinDon Technologies Pvt Ltd" placeholder="Company name">
                                                    </div>
                                                </div>
                                                <div class="col-12 d-flex flex-sm-row flex-column justify-content-end mt-1">
                                                    <button type="submit" class="btn btn-primary glow mb-1 mb-sm-0 mr-0 mr-sm-1">Save
                                                        Changes</button>
                                                    <button type="reset" class="btn btn-outline-warning">Reset</button>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- users edit account form ends -->
                                    </div>
                                    
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- users edit ends -->

            </div>
        </div>
@endsection

@section('script')
<script src="{{URL::asset('assets/app-assets/js/scripts/pages/app-user.js')}}"></script>
<script src="{{URL::asset('assets/app-assets/js/scripts/navs/navs.js')}}"></script>
<script src="{{URL::asset('assets/app-assets/vendors/js/forms/validation/jqBootstrapValidation.js')}}"></script>
<script src="{{URL::asset('assets/app-assets/vendors/js/forms/select/select2.full.min.js')}}"></script>


@endsection
