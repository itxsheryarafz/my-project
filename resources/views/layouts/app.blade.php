<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- <link rel="stylesheet" href="{{ asset('./auth.blade.php') }}"> -->

    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">

    <link rel="stylesheet" href="{{ asset('resources/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <!-- <link rel="stylesheet" href="{{ asset('css/main.css') }}"> -->

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="{{ asset('plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/daterangepicker/daterangepicker.css') }}">

    <link rel="stylesheet" href="{{ asset('plugins/summernote/summernote-bs4.min.css') }}">



    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        <!--
                       @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif  -->
                        @else
                        <!-- <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li> -->
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
    @include('sweetalert::alert')


    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>


    <script src="{{asset(('plugins/jquery-ui/jquery-ui.min.js'))}}"></script>

    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>
    <!-- Bootstrap 4 -->

    <script src="{{asset(('plugins/bootstrap/js/bootstrap.bundle.min.js'))}}"></script>
    <!-- ChartJS -->>

    <script src="{{asset(('plugins/chart.js/Chart.min.js'))}}"></script>
    <!-- Sparkline -->

    <script src="{{asset(('plugins/sparklines/sparkline.js'))}}"></script>
    <!-- JQVMap -->

    <script src="{{asset(('plugins/jqvmap/jquery.vmap.min.js'))}}"></script>

    <script src="{{asset(('plugins/jqvmap/maps/jquery.vmap.usa.js'))}}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{asset(('plugins/jquery-knob/jquery.knob.min.js'))}}"></script>
    <!-- daterangepicker -->
    <script src="{{asset(('plugins/moment/moment.min.js'))}}"></script>


    <script src="{{asset(('plugins/daterangepicker/daterangepicker.js'))}}"></script>
    <!-- Tempusdominus Bootstrap 4 -->

    <script src="{{asset(('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js'))}}"></script>
    <!-- Summernote -->

    <script src="{{asset(('plugins/summernote/summernote-bs4.min.js'))}}"></script>
    <!-- overlayScrollbars -->
    <script src="{{asset(('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js'))}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset(('dist/js/adminlte.js'))}}"></script>
    <!-- AdminLTE for demo purposes -->

    <script src="{{asset(('dist/js/demo.js'))}}"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->

    <script src="{{asset(('dist/js/pages/dashboard.js'))}}"></script>


</body>

</html>
