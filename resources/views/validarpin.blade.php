<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Bitu</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ URL::asset('vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/iconfonts/puse-icons-feather/feather.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/css/vendor.bundle.base.css')}}">
  <link rel="stylesheet" href="{{ URL::asset('vendors/css/vendor.bundle.addons.css') }}">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ URL::asset('images/favicon.png') }}" />
  <script type="/stylesheet">
  </script>
</head>

<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth login-full-bg">
        <div class="row w-100">
          <div class="col-lg-4 mx-auto">
                <div class="auth-form-dark text-left p-5">
                 
                  <h4 class="font-weight-light"></h4>
                  <form  method="POST" action="{{route('administrador')}}">
                    {!! csrf_field() !!}
                     <img src="https://placehold.it/100x100" class="img-lg rounded-circle mb-2" alt="profile image"/>
                    <center></center>
                      <div class="col-md-12 grid-margin stretch-card" style="color:black !important;">
                          <div class="card text-center">
                            <div class="card-body">
                              <p class="mt-4  black">
                                  Por favor digite el pin de seguridad que hemos enviado a su correo.
                              </p>
                              <button class="btn btn-info btn-sm mt-3 mb-4">Entrar</button>
                             
                            </div>
                          </div>
                        </div>
                  </form>
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
  <script src="../../vendors/js/vendor.bundle.base.js"></script>
  <script src="../../vendors/js/vendor.bundle.addons.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="{{ URL::asset('js/off-canvas.js')}}"></script>
  <script src="{{ URL::asset('js/hoverable-collapse.js')}}"></script>
  <script src="{{ URL::asset('js/misc.js')}}"></script>
  <script src="{{ URL::asset('js/settings.js')}}"></script>
  <script src="{{ URL::asset('js/todolist.js')}}"></script>
  <!-- endinject -->
</body>

</html>
