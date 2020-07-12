<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
            <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
                <title>
                    Pearl UI
                </title>
                <!-- plugins:css -->
                <link href="{{ URL::asset('../../vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}" rel="stylesheet">
                    <link href="{{ URL::asset('../../vendors/iconfonts/puse-icons-feather/feather.css')}}" rel="stylesheet">
                        <link href="{{ URL::asset('../../vendors/css/vendor.bundle.base.css')}}" rel="stylesheet">
                            <link href="{{ URL::asset('../../vendors/css/vendor.bundle.addons.css')}}" rel="stylesheet">
                                <!-- endinject -->
                                <!-- inject:css -->
                                <link href="{{ URL::asset('../../css/style.css')}}" rel="stylesheet">
                                    <!-- endinject -->
                                    <link href="{{ URL::asset('../../images/favicon.png')}}" rel="shortcut icon"/>
                                </link>
                            </link>
                        </link>
                    </link>
                </link>
            </meta>
        </meta>
    </head>
    <body>
        <div class="container-scroller">
            <div class="container-fluid page-body-wrapper full-page-wrapper">
                <div class="content-wrapper d-flex align-items-center text-center error-page bg-info">
                    <div class="row flex-grow">
                        <div class="col-lg-7 mx-auto text-white">
                            <div class="row align-items-center d-flex flex-row">
                                <div class="col-lg-6 text-lg-right pr-lg-4">
                                    <h1 class="display-1 mb-0">
                                        500
                                    </h1>
                                </div>
                                <div class="col-lg-6 error-page-divider text-lg-left pl-lg-4">
                                    <h2>
                                        SORRY!
                                    </h2>
                                    <h3 class="font-weight-light">
                                        Internal server error!
                                    </h3>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12 text-center mt-xl-2">
                                    <a class="text-white font-weight-medium" href="{{ route('home') }}">
                                        Back to home
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-5">
                                <div class="col-12 mt-xl-2">
                                    <p class="text-white font-weight-medium text-center">
                                        Copyright © 2018  All rights reserved.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
            </div>
            <!-- page-body-wrapper ends -->
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        <script src="{{ URL::asset('../../vendors/js/vendor.bundle.base.js')}}">
        </script>
        <script src="{{ URL::asset('../../vendors/js/vendor.bundle.addons.js')}}">
        </script>
        <!-- endinject -->
        <!-- inject:js -->
        <script src="{{ URL::asset('../../js/off-canvas.js')}}">
        </script>
        <script src="{{ URL::asset('../../js/hoverable-collapse.js')}}">
        </script>
        <script src="{{ URL::asset('../../js/misc.js')}}">
        </script>
        <script src="{{ URL::asset('../../js/settings.js')}}">
        </script>
        <script src="{{ URL::asset('../../js/todolist.js')}}">
        </script>
        <!-- endinject -->
    </body>
</html>
