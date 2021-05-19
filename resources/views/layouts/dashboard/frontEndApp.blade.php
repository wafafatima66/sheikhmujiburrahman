
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Bongobondhu Dashboard</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}">

        <!-- C3 charts css -->
        <link href="{{asset('assets/plugins/c3/c3.min.css" rel="stylesheet')}}" type="text/css"  />
         <!-- Sweet Alert -->
        <link href="{{asset('assets/plugins/sweet-alert2/sweetalert2.min.css')}}" rel="stylesheet" type="text/css">

        <!-- App css -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/metismenu.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" />
        {{-- <link href="{{ asset('assets/css/dataTables.css') }}" rel="stylesheet" type="text/css" /> --}}
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.css">
        <link href="{{ asset('assets/tost/toastr.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">

        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">


        @yield('addNewCss')
        <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- Top Bar Start -->
            <div class="topbar">

                <!-- LOGO -->
                <div class="topbar-left">
                    <a href="index.html" class="logo">
                                <span>
                                    <img src="{{ asset('assets/images/logo.png') }}" alt="" height="25">
                                </span>
                        <i>
                            <img src="{{ asset('assets/images/logo_sm.png') }}" alt="" height="28">
                        </i>
                    </a>
                </div>

                <nav class="navbar-custom">

                    <ul class="list-inline float-right mb-0">


                        <li class="list-inline-item dropdown notification-list">
                            <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#" role="button"
                               aria-haspopup="false" aria-expanded="false">
                               {{ Auth::user()->name }}
                                <img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user" class="rounded-circle">

                            </a>
                            <div class="dropdown-menu dropdown-menu-right profile-dropdown " aria-labelledby="Preview">
                                <!-- item-->
                                <div class="dropdown-item noti-title">
                                    <h5 class="text-overflow"><small>Welcome ! {{ Auth::user()->name }} </small> </h5>
                                </div>


                                    <a class="dropdown-item notify-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        <i class="zmdi zmdi-power"></i> {{ __('Logout') }}
                                    </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>

                               {{--  <a class="dropdown-item notify-item" href="{{ route('logout') }}">
                                    <i class="zmdi zmdi-power"></i> 
                       {{ __('Logout') }}
                                </a> --}}

                              {{--   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                </form> --}}

                            </div>
                        </li>

                    </ul>

                    <ul class="list-inline menu-left mb-0">
                        <li class="float-left">
                            <button class="button-menu-mobile open-left waves-light waves-effect">
                                <i class="dripicons-menu"></i>
                            </button>
                        </li>
                        @yield('searchpanel')
                    </ul>

                </nav>

            </div>
            <!-- Top Bar End -->


            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">
                <div class="slimscroll-menu" id="remove-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu" id="side-menu">
                            <li class="menu-title">Navigation</li>

                            <li>
                            <a href="{{__('/')}}">
                                    <i class="fi-air-play"></i><span> Main Site </span>
                                </a>
                                {{-- <ul class="nav-second-level" aria-expanded=false>
                                    <li><a href="index.html">Dashboard 1</a></li>
                                    <li><a href="dashboard-2.html">Dashboard 2</a></li>
                                </ul> --}}
                            </li>

                            <li>
                                <a><i class="fi-help"></i><span>Articles</span><span class="menu-arrow"></span></a>

                                <ul class="nav-second-level" aria-expanded=false>
                                    <li><a href="{{route('articleList')}}">Article List</a></li>
                                    <li><a href="{{route('addArticle')}}">Add Article</a></li>
                                </ul>
                            </li>


                          

                            <li>
                                <a>
                                    <i class="fi-help"></i><span> Theme Settings </span> <span class="menu-arrow"></span>
                                </a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="{{route('logosettings')}}">Logo</a></li>
                                    <li><a href="{{route('firstPageText')}}">First Page Text</a></li>
                                    <li><a href=" {{route('bannerSettings')}} ">First Page Banner</a></li>
                                    
                                    <li><a href=" {{route('historySettings')}} ">History Page</a></li>

                                    <li><a href=" {{route('mujibHistorydash')}} ">Bongobondhu History</a></li>

                                    <li>
                                        <a><span>Bongobondhu Jiboni</span><i class=" fas fa-caret-down"></i></a>
                                       
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="{{route('mujibLifedash')}}">List</a></li>
                                            <li><a href="{{route('mujibLifedashAdd')}}">Add New</a></li>
                                        </ul>
                                    
                                    </li>

                                    <li>
                                        <a><span>Bongobondhu Speech</span><i class="fas fa-caret-down" style="margin: 0 ;"></i></a>
                                        
                                        <ul class="nav-second-level" aria-expanded="false">
                                            <li><a href="{{route('mujibSpeechdash')}} ">List</a></li>
                                            <li><a href="{{route('mujibSpeechdashAdd')}} ">Add New</a></li>
                                        </ul>
                                    
                                    </li>
                                
                                
                                    <li><a href=" {{route('mujibPublicationdash')}} ">Bongobondhu Publication</a></li>
                                    <li><a href=" {{route('knowmoredash')}} ">Bongobondhu Know More</a></li>
                                    
                                    @if (Auth::user()->userType != 1)

                                        <li>
                                            <a href=" {{route('allusers')}} "><span>All Users</span><i class=" fas fa-caret-down"></i></a>

                                            <ul class="nav-second-level" aria-expanded="false">
                                                <li><a href="{{route('allusers')}}">List</a></li>
                                                <li><a href="{{route('addUser')}}">Add New</a></li>
                                            </ul>
                                        </li>

                                    @endif

                                    <li><a href=" {{route('addPhoto')}} ">Photo Gallery</a></li>
                                </ul>
                            </li>

                        </ul>

                    </div>
                    <!-- Sidebar -->
                    <div class="clearfix"></div>

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <h4 class="page-title float-left">@yield('pageHeading')</h4>

                                    <ol class="breadcrumb float-right">
                                        <li class="breadcrumb-item"><a href="{{__('/')}}">Dashboard</a></li>
                                        <li class="breadcrumb-item active">@yield('pageHeading')</li>
                                    </ol>

                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row ">
                            <div class="col-12 d-flex justify-content-center">
                                @yield('content')
                            </div>
                        </div>
                        <!-- end row -->



                    </div> <!-- container -->

                </div> <!-- content -->

                {{-- <footer class="footer text-right">
                    2017 © Adminox. - Coderthemes.com
                </footer> --}}

            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->


        <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
        <script src="{{ asset('assets/js/tether.min.js') }}"></script><!-- Tether for Bootstrap -->
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/metisMenu.min.js') }}"></script>
        <script src="{{ asset('assets/js/waves.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>

        <!-- Counter js  -->
        <script src="{{ asset('assets/plugins/waypoints/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js') }}"></script>

        <!--C3 Chart-->
        <script type="text/javascript" src="{{ asset('assets/plugins/d3/d3.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/c3/c3.min.js') }}"></script>

        <!--Echart Chart-->
        <script src="{{ asset('assets/plugins/echart/echarts-all.js') }}"></script>

        <!-- Dashboard init -->
        <script src="{{ asset('assets/pages/jquery.dashboard.js') }}"></script>

        <!-- App js -->
        <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.app.js') }}"></script>
        {{-- <script src="{{ asset('assets/js/dataTables.js') }}"></script> --}}

                <!-- Sweet-Alert  -->
        <script src="{{ asset('assets/plugins/sweet-alert2/sweetalert2.min.js') }}"></script>
        <script src="{{ asset('assets/pages/jquery.sweet-alert.init.js') }}"></script>
        <script src="{{ asset('assets/tost/jquery3.4.1.min.js') }}"></script>
        <script src="{{ asset('assets/tost/toastr.min.js') }}"></script>
        <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
            <script>
                @if(Session::has('greenStatus'))
                            toastr.success("{{ Session::get('greenStatus') }}");
                @endif
            </script>
            <script>
                @if(Session::has('redStatus'))
                            toastr.error("{{ Session::get('redStatus') }}");
                @endif
            </script>
            <script>
                @if(Session::has('yellowStatus'))
                            toastr.warning("{{ Session::get('yellowStatus') }}");
                @endif
            </script>
            <script>
                @if($errors->all())
                        toastr.error("Error Occared ! Please Check The Form Requirements 😢");
                        @foreach ($errors->all() as $item)
                            toastr.warning("{{ $item }}");
                        @endforeach
                @endif
            </script>
        @yield('addNewScript');
    <script>
        function runLogoutFun() {
        event.preventDefault();

        let url = window.location.origin+'/2factordisablenow';
        // console.log(url);


        var xhr = new XMLHttpRequest();
        xhr.open('get', url, true);
        xhr.onload = function() {
            if (this.status === 200) {
                document.getElementById('logout-form').submit();
            }
        }
        xhr.send();


        }
    </script>
    </body>
</html>
