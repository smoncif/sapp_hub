<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
  <head>
                <meta charset="utf-8">
                <meta http-equiv="X-UA-Compatible" content="IE=edge">
                <meta name="viewport" content="width=device-width, initial-scale=1">

                <!-- CSRF Token -->
                <meta name="csrf-token" content="{{ csrf_token() }}">

                <title>{{ config('app.name', 'Laravel') }}</title>


                <!-- Styles -->
                {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
                <!-- BEGIN GLOBAL MANDATORY STYLES -->
                <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
                <link href="{{ asset('/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
                <!-- BEGIN THEME GLOBAL STYLES -->
                <link href="{{ asset('css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
                <!-- END THEME GLOBAL STYLES -->
                <!-- BEGIN THEME LAYOUT STYLES -->
                <link href="{{ asset('plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('css/layout.min.css') }}" rel="stylesheet" type="text/css" />
                <link href="{{ asset('css/themes/darkblue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
                <!-- END THEME LAYOUT STYLES -->


                <!-- Scripts -->
                <script>
                    window.Laravel = {!! json_encode([
                        'csrfToken' => csrf_token(),
                    ]) !!};
                </script>
</head>
            <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
              <div class="page-wrapper">
                <!-- BEGIN HEADER -->
                @include('layouts.header')
                <!-- END HEADER -->
                <div class="clearfix"> </div>

                <div class="page-container">
                  <!-- BEGIN SIDEBAR -->
                  @include('layouts.sidebar')
                  <!-- END SIDEBAR -->
                  <!-- BEGIN CONTENT -->
                <div class="page-content-wrapper">
                    <!-- BEGIN CONTENT BODY -->
                    <div class="page-content">
                        <!-- BEGIN PAGE HEADER-->
                        <!-- BEGIN THEME PANEL -->
                        <div class="theme-panel hidden-xs hidden-sm">
                            <div class="toggler"> </div>
                            <div class="toggler-close"> </div>
                            <div class="theme-options">
                                <div class="theme-option theme-colors clearfix">
                                    <span> THEME COLOR </span>
                                    <ul>
                                        <li class="color-default current tooltips" data-style="default" data-container="body" data-original-title="Default"> </li>
                                        <li class="color-darkblue tooltips" data-style="darkblue" data-container="body" data-original-title="Dark Blue"> </li>
                                        <li class="color-blue tooltips" data-style="blue" data-container="body" data-original-title="Blue"> </li>
                                        <li class="color-grey tooltips" data-style="grey" data-container="body" data-original-title="Grey"> </li>
                                        <li class="color-light tooltips" data-style="light" data-container="body" data-original-title="Light"> </li>
                                        <li class="color-light2 tooltips" data-style="light2" data-container="body" data-html="true" data-original-title="Light 2"> </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END THEME PANEL -->
                        <!-- BEGIN PAGE BAR -->
                        <div class="page-bar">
                            <ul class="page-breadcrumb">
                                <li>
                                    <a href="index.html">Home</a>
                                    <i class="fa fa-circle"></i>
                                </li>
                                <li>
                                    <span>Apps</span>
                                </li>
                            </ul>
                            <div class="page-toolbar">
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn green btn-sm btn-outline dropdown-toggle" data-toggle="dropdown"> Actions
                                        <i class="fa fa-angle-down"></i>
                                    </button>
                                    <ul class="dropdown-menu pull-right" role="menu">
                                        <li>
                                            <a href="#">
                                                <i class="icon-bell"></i> Action</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-shield"></i> Another action</a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-user"></i> Something else here</a>
                                        </li>
                                        <li class="divider"> </li>
                                        <li>
                                            <a href="#">
                                                <i class="icon-bag"></i> Separated link</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- END PAGE BAR -->
                        <!-- BEGIN PAGE TITLE-->
                        <h1 class="page-title"> Calendar
                            <small>calendar page</small>
                        </h1>
                        <!-- END PAGE TITLE-->
                        <!-- END PAGE HEADER-->
                        <div class="row">
                            <div class="col-md-12">
                              @yield('content')
                        </div>
                    </div>
                    <!-- END CONTENT BODY -->
                </div>
                <!-- END CONTENT -->
                  @include('layouts.quick-sidebar')
                </div>
              </div>
                  <!-- BEGIN CORE PLUGINS -->
                    <script src="{{ asset('plugins/jquery.min.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
                    <!-- END CORE PLUGINS -->
                    <!-- BEGIN THEME GLOBAL SCRIPTS -->
                    <script src="{{ asset('js/app.js') }}"></script>
                    <!-- END THEME GLOBAL SCRIPTS -->
                    <!-- BEGIN THEME LAYOUT SCRIPTS -->
                    <script src="{{ asset('layouts/scripts/layout.min.js') }}" type="text/javascript"></script>
                    <script src="{{ asset('layouts/scripts/quick-sidebar.js') }}" type="text/javascript"></script>
                    {{-- <script src="../assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>

                    <script src="../assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script> --}}
                    <!-- END THEME LAYOUT SCRIPTS -->



            </body>

  {{-- <body>
                <div id="app">
                    <nav class="navbar navbar-default navbar-static-top">
                        <div class="container">

                            <div class="navbar-header">

                                <!-- Collapsed Hamburger -->
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                                    <span class="sr-only">Toggle Navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>

                                <!-- Branding Image -->
                                <a class="navbar-brand" href="{{ url('/') }}">
                                    {{ config('app.name', 'Laravel') }}
                                </a>
                            </div>

                            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                                <!-- Left Side Of Navbar -->
                                <ul class="nav navbar-nav">
                                    &nbsp;
                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="nav navbar-nav navbar-right">
                                    <!-- Authentication Links -->
                                    @if (Auth::guest())
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @else
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                                {{ Auth::user()->name }} <span class="caret"></span>
                                            </a>

                                            <ul class="dropdown-menu" role="menu">
                                                <li>
                                                    <a href="{{ route('logout') }}"
                                                        onclick="event.preventDefault();
                                                                 document.getElementById('logout-form').submit();">
                                                        Logout
                                                    </a>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        {{ csrf_field() }}
                                                    </form>
                                                </li>
                                            </ul>
                                        </li>
                                    @endif
                                </ul>
                            </div>
                        </div>
                    </nav>

                    @yield('content')
                </div>

                <!-- Scripts -->
                <script src="{{ asset('js/app.js') }}"></script>
            </body> --}}
</html>
