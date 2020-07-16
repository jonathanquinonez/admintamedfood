<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<head><meta charset="gb18030">

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Tamed Administrativo</title>

    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
    <link rel="apple-touch-icon" href="{{URL::asset('assets/app-assets/images/ico/apple-icon-120.png')}}">
    
    <!-- Favicon-->
    <link rel="shortcut icon" type="image/x-icon" href="{{URL::asset('assets/app-assets/images/ico/favicon.ico')}}">
    <!-- Plugins Core Css -->
    <link  rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link  rel="stylesheet" href="{{URL::asset('assets/css/style-rtl.css')}}">

     <!-- BEGIN: Vendor CSS-->
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/vendors/css/vendors.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/vendors/css/calendars/fullcalendar.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/vendors/css/calendars/extensions/daygrid.min.css')}}">
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/vendors/css/calendars/extensions/timegrid.min.css')}}">
     
     <!-- END: Vendor CSS-->
 
     <!-- BEGIN: Theme CSS-->
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/bootstrap.css')}}">
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/bootstrap-extended.css')}}">

     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/components.css')}}">
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/themes/dark-layout.css')}}">
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/themes/semi-dark-layout.css')}}">
 
     <!-- BEGIN: Page CSS-->
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/core/menu/menu-types/vertical-menu.css')}}">
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/core/colors/palette-gradient.css')}}">
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/plugins/calendars/fullcalendar.css')}}">
     <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/app-assets/css/pages/app-user.css')}}">
     <!-- END: Page CSS-->
 
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Baloo+Thambi&display=swap" rel="stylesheet">
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDFZn-_2DpGEgdfnXX4gywzaGRS01HgA-U&callback=initMap" type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="{{URL::asset('assets/css/style.css')}}">

    @yield('css')
    
</head>
<body class="vertical-layout vertical-menu-modern dark-layout 2-columns  navbar-floating footer-static  " data-open="click" data-menu="vertical-menu-modern" data-col="2-columns" data-layout="dark-layout">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-lg navbar navbar-with-menu floating-nav navbar-dark navbar-shadow">
        <div class="navbar-wrapper">
            <div class="navbar-container content">
                <div class="navbar-collapse" id="navbar-mobile">
                    <div class="mr-auto float-left bookmark-wrapper d-flex align-items-center">
                        <ul class="nav navbar-nav">
                            <li class="nav-item mobile-menu d-xl-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ficon feather icon-menu"></i></a></li>
                        </ul>
                        
                       
                    </div>
                    <ul class="nav navbar-nav float-right">
                      
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand"><i class="ficon feather icon-maximize"></i></a></li>
                       
                        
                        
                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                                <div class="user-nav d-sm-flex d-none"><span class="user-name text-bold-600">{{Auth()->user()->name}}</span><span class="user-status">{{Auth()->user()->admin}}</span></div><span><img class="round" src="{{URL::asset('assets/app-assets/images/portrait/small/avatar-s-11.jpg')}}" alt="avatar" height="40" width="40"></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="page-user-profile.html"><i class="feather icon-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="javascript:void(0);" {{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="feather icon-power"></i> Logout
                                </a>
                                <form action="{{ route('logout') }}" id="logout-form" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    
    <ul class="main-search-list-defaultlist-other-list d-none">
        <li class="auto-suggestion d-flex align-items-center justify-content-between cursor-pointer"><a class="d-flex align-items-center justify-content-between w-100 py-50">
                <div class="d-flex justify-content-start"><span class="mr-75 feather icon-alert-circle"></span><span>No results found.</span></div>
            </a></li>
    </ul>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
    <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
        <div class="navbar-header">
            <ul class="nav navbar-nav flex-row">
                <li class="nav-item mr-auto"><a class="navbar-brand" href="{{route('home')}}">
                        <div class="brand-logo"></div>
                        <h2 class="brand-text mb-0">Tamed</h2>
                    </a></li>
                </ul>
        </div>
        <div class="shadow-bottom"></div>
        <div class="main-menu-content">
            <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                {{-- <li class=" nav-item"><a href="index.html"><i class="feather icon-home"></i><span class="menu-title" data-i18n="Dashboard">Dashboard</span><span class="badge badge badge-warning badge-pill float-right mr-2">2</span></a>
                    <ul class="menu-content">
                        <li class="active"><a href="dashboard-analytics.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Analytics">Analytics</span></a>
                        </li>
                        <li><a href="dashboard-ecommerce.html"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="eCommerce">eCommerce</span></a>
                        </li>
                    </ul>
                </li> --}}
                <li class=" navigation-header"><span>Menu Administrativo</span>
                </li>
                <li class=" nav-item"><a href="{{route('verProductor')}}">
                    <i class="feather icon-align-left"></i>
                    <span class="menu-title" data-i18n="Email">Productores</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-align-left"></i><span class="menu-title" data-i18n="Email">Receptores</span></a>
                </li>
                <li class=" nav-item"><a href="#"><i class="feather icon-align-left"></i><span class="menu-title" data-i18n="Email">Delivery Boy</span></a>
                </li>
                <li class=" nav-item"><a href="{{route('verClientes')}}">
                <i class="feather icon-align-left"></i>
                <span class="menu-title" data-i18n="Email">Clientes</span></a>
                </li>
            
                <li class=" nav-item">
                    <a href="#"><i class="feather icon-pie-chart"></i><span class="menu-title" data-i18n="Charts">Configuraciones</span>
                    {{-- <span class="badge badge badge-pill badge-success float-right mr-2">3</span> --}}
                </a>
                    <ul class="menu-content">
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Apex">Categorías</span></a>
                        </li>
                        <li><a href="#"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Chartjs">Info App</span></a>
                        </li>
                    <li><a href="{{route('verPerfil', [Auth()->user()->id])}}"><i class="feather icon-circle"></i><span class="menu-item" data-i18n="Echarts">Perfil</span></a>
                        </li>
                    </ul>
                </li>
                
            </ul>
        </div>
    </div>

    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        
        @yield('contenido')
        
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
    <footer class="footer footer-static footer-light">
        <p class="clearfix blue-grey lighten-2 mb-0"><span class="float-md-left d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2020<a class="text-bold-800 grey darken-2" href="https://tamed.global/" target="_blank">Tamed,</a>All rights Reserved</span>
            
            <button class="btn btn-primary btn-icon scroll-top" type="button"><i class="feather icon-arrow-up"></i></button>
        </p>
    </footer>
    <!-- END: Footer-->

    @yield('script')
        <!-- BEGIN: Vendor JS-->
        <script src="{{URL::asset('assets/app-assets/vendors/js/vendors.min.js')}}"></script>
        <!-- BEGIN Vendor JS-->
    
        <!-- BEGIN: Page Vendor JS-->
        <script src="{{URL::asset('assets/app-assets/vendors/js/extensions/moment.min.js')}}"></script>
        <script src="{{URL::asset('assets/app-assets/vendors/js/calendar/fullcalendar.min.js')}}"></script>
        <script src="{{URL::asset('assets/app-assets/vendors/js/calendar/extensions/daygrid.min.js')}}"></script>
        <script src="{{URL::asset('assets/app-assets/vendors/js/calendar/extensions/timegrid.min.js')}}"></script>
        <script src="{{URL::asset('assets/app-assets/vendors/js/calendar/extensions/interactions.min.js')}}"></script>
        <script src="{{URL::asset('assets/app-assets/vendors/js/pickers/pickadate/picker.js')}}"></script>
        <script src="{{URL::asset('assets/app-assets/vendors/js/pickers/pickadate/picker.date.js')}}"></script>
        <!-- END: Page Vendor JS-->
    
        <!-- BEGIN: Theme JS-->
        <script src="{{URL::asset('assets/app-assets/js/core/app-menu.js')}}"></script>
        <script src="{{URL::asset('assets/app-assets/js/core/app.js')}}"></script>
        <script src="{{URL::asset('assets/app-assets/js/scripts/components.js')}}"></script>
        <!-- END: Theme JS-->
    
        <!-- BEGIN: Page JS-->
        <script src="{{URL::asset('assets/app-assets/js/scripts/extensions/fullcalendar.js')}}"></script>
        <!-- END: Page JS-->
    
</body>

</html>