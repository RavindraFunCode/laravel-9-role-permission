<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="{{ url('assets/admin/images/logo/apple-touch-icon.png')}}">
    <link rel="shortcut icon" href="{{ url('assets/admin/images/logo/favicon.png')}}">

    <!-- core dependcies css -->
    <link rel="stylesheet" href="{{ url('assets/admin/vendor/bootstrap/dist/css/bootstrap.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/admin/vendor/PACE/themes/blue/pace-theme-minimal.css')}}" />
    <link rel="stylesheet" href="{{ url('assets/admin/vendor/perfect-scrollbar/css/perfect-scrollbar.min.css')}}" />

    <!-- page css -->

    <!-- core css -->
    <link href="{{ url('assets/admin/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/materialdesignicons.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{ url('assets/admin/css/app.css')}}" rel="stylesheet">

    @yield('page-style')

</head>

<body>
    <div class="app side-nav-dark quick-view-expand header-info-gradient">
        <div class="layout">
            <!-- Header START -->
            <div class="header navbar">
                <div class="header-container">
                    <div class="nav-logo">
                        <a href="{{ route('home') }}">
                            <div class="logo logo-dark" style="background-image: url('{{ url('assets/admin/images/logo/logo.png')}}')"></div>
                            <div class="logo logo-white" style="background-image: url('{{ url('assets/admin/images/logo/logo-white.png')}}')"></div>
                        </a>
                    </div>
                    <ul class="nav-left">
                        <li>
                            <a class="sidenav-fold-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                            <a class="sidenav-expand-toggler" href="javascript:void(0);">
                                <i class="mdi mdi-menu"></i>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav-right">
                        
                        <li class="notifications dropdown dropdown-animated scale-left">
                            <span class="counter">2</span>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell-ring-outline"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-lg p-v-0">
                                <li class="p-v-15 p-h-20 border bottom text-dark">
                                    <h5 class="m-b-0">
                                        <i class="mdi mdi-bell-ring-outline p-r-10"></i>
                                        <span>Notifications</span>
                                    </h5>
                                </li>
                                <li>
                                    <ul class="list-media overflow-y-auto relative scrollable" style="max-height: 300px">
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-primary">
                                                        <i class="ti-settings"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        System shutdown
                                                    </span>
                                                    <span class="sub-title">8 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-success">
                                                        <i class="ti-user"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        New User Registered
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-warning">
                                                        <i class="ti-file"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        New Attacthemnet
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="list-item border bottom">
                                            <a href="javascript:void(0);" class="media-hover p-15">
                                                <div class="media-img">
                                                    <div class="icon-avatar bg-info">
                                                        <i class="ti-shopping-cart"></i>
                                                    </div>
                                                </div>
                                                <div class="info">
                                                    <span class="title">
                                                        New Order Received
                                                    </span>
                                                    <span class="sub-title">12 min ago</span>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="p-v-15 p-h-20 text-center">
                                    <span>
                                        <a href="#" class="text-gray">Check all notifications <i class="ei-right-chevron p-l-5 font-size-10"></i></a>
                                    </span>
                                </li>
                            </ul>
                        </li>
                        <li class="user-profile dropdown dropdown-animated scale-left">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img class="profile-img img-fluid" src="{{ url('assets/admin/images/avatars/thumb-13.jpg')}}" alt="">
                            </a>
                            <ul class="dropdown-menu dropdown-md p-v-0">
                                <li>
                                    <ul class="list-media">
                                        <li class="list-item p-15">
                                            <div class="media-img">
                                                <img src="{{ url('assets/admin/images/avatars/thumb-13.jpg')}}" alt="">
                                            </div>
                                            <div class="info">
                                                <span class="title text-semibold">{{ Auth::user()->name }}</span>
                                                <span class="sub-title">{{ Auth::user()->email }}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="#">
                                        <i class="ti-user p-r-10"></i>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="ti-power-off p-r-10"></i>
                                        <span>Logout</span>
                                    </a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- Header END -->

            <!-- Side Nav START -->
            <div class="side-nav expand-lg">
                <div class="side-nav-inner">
                    <ul class="side-nav-menu scrollable">
                        <li class="side-nav-header">
                            <span>Navigation</span>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="" href="{{ route('home') }}">
                                <span class="icon-holder">
                                    <i class="mdi mdi-gauge"></i>
                                </span>
                                <span class="title">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="" href="{{ route('users.index') }}">
                                <span class="icon-holder">
                                    <i class="mdi mdi-gauge"></i>
                                </span>
                                <span class="title">User</span>
                            </a>
                        </li>
                        <li class="nav-item dropdown ">
                            <a class="dropdown-toggle" href="javascript:void(0);">
                                <span class="icon-holder">
                                    <i class="mdi mdi-gauge"></i>
                                </span>
                                <span class="title">Setting</span>
                                <span class="arrow">
                                    <i class="mdi mdi-chevron-right"></i>
                                </span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="">
                                    <a href="{{ route('roles.index') }}">Roles</a>
                                </li>
                                <li class="">
                                    <a href="index.html">Permission</a>
                                </li>
                            </ul>
                        </li>
                        
                    </ul>
                </div>
            </div>
            <!-- Side Nav END -->

            <!-- Page Container START -->
            <div class="page-container">
                <!-- Quick View START -->
                
                <!-- Side Panel END -->

                <!-- Content Wrapper START -->
                <div class="main-content">
                    <div class="container-fluid">
                        <div class="page-header">
                            <h2 class="header-title">{{ $sub_title }}</h2>
                            <div class="header-sub-title">
                                <nav class="breadcrumb breadcrumb-dash">
                                    <a href="{{ route('home') }}" class="breadcrumb-item"><i class="ti-home p-r-5"></i>Dashboard</a>
                                    <a class="breadcrumb-item" href="javascript:void(0)">{{ $title }}</a>
                                    <span class="breadcrumb-item active">{{ $sub_title }}</span>
                                </nav>
                            </div>
                        </div>
                        @if( Session()->has('success') || Session()->has('error')  )
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-body">
                                    @if(Session()->has('success'))
                                    <div class="alert alert-success alert-dismissible fade show">
                                        <strong>{{session('success')}}</strong>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                    @if(Session()->has('error'))
                                    <div class="alert alert-danger alert-dismissible fade show">
                                        <strong>{{session('error')}}</strong> 
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        @endif

                        @yield('content')

                    </div>
                </div>
                <!-- Content Wrapper END -->

                <!-- Footer START -->
                <footer class="content-footer">
                    <div class="footer">
                        <div class="copyright">
                            <span>Copyright © 2018 <b class="text-dark">Theme_Nate</b>. All rights reserved.</span>
                            <span class="go-right">
                                <a href="#" class="text-gray m-r-15">Term &amp; Conditions</a>
                                <a href="#" class="text-gray">Privacy &amp; Policy</a>
                            </span>
                        </div>
                    </div>
                </footer>
                <!-- Footer END -->
            </div>
            <!-- Page Container END -->
        </div>
    </div>

    <script src="{{ url('assets/admin/js/vendor.js')}}"></script>

    <script src="{{ url('assets/admin/js/app.min.js')}}"></script>

    <!-- page js -->
    <script src="{{ url('assets/admin/vendor/moment/min/moment.min.js')}}"></script>
    <script src="{{ url('assets/admin/vendor/selectize/dist/js/standalone/selectize.min.js')}}"></script>
    <script src="{{ url('assets/admin/vendor/summernote/dist/summernote-bs4.min.js')}}"></script>

    <script src="{{ url('assets/admin/js/forms/form-elements.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

    <script src="{{ url('assets/admin/vendor/sweetalert/lib/sweet-alert.js')}}"></script>
    <script src="{{ url('assets/admin/vendor/noty/js/noty/packaged/jquery.noty.packaged.min.js')}}"></script>
    <script src="{{ url('assets/admin/js/components/notifications.js')}}"></script>
    <script type="text/javascript">
        function notify_message(msg, type){
            noty({
                 theme: 'app-noty',
                 text: msg,
                 type: type,
                 timeout: 3000,
                 layout: 'topRight',
                 closeWith: ['button', 'click'],
                 animation: {
                    open: 'noty-animation fadeIn',
                    close: 'noty-animation fadeOut'
                 }
            });
        }
        function _success(msg){
            notify_message(msg, "success");
        }
        function _error(msg){
            notify_message(msg, "error");
        }

    </script>

    @yield('page-script')

</body>

</html>