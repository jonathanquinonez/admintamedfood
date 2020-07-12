
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Fonavanti Administrativo</title>
    <!-- Favicon-->
    <link rel="icon" href="{{URL::asset('assets/images/favicon.ico')}}" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link  rel="stylesheet" href="{{URL::asset('assets/css/app.min.css')}}">
    <!-- Custom Css -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link rel="stylesheet" href="{{URL::asset('assets/css/styles/all-themes.css')}}"  />
    @yield('css')
