<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') | ระบบจัดการหอพัก และอพาร์ตเม้นท์</title>
    <!-- Favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

    <!-- Bootstrap Core Css -->
    <link href="{{asset('assets/plugins/bootstrap/dist/css/bootstrap.css')}}" rel="stylesheet" />

    <!-- Animate.css Css -->
    <link href="{{asset('assets/plugins/animate-css/animate.css')}}" rel="stylesheet" />

    <!-- Font Awesome Css -->
    <link href="{{asset('assets/plugins/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" />

    <!-- iCheck Css -->
    <link href="{{asset('assets/plugins/iCheck/skins/flat/_all.css')}}" rel="stylesheet" />

    <!-- Switchery Css -->
    <link href="{{asset('assets/plugins/switchery/dist/switchery.css')}}" rel="stylesheet" />

    <!-- Metis Menu Css -->
    <link href="{{asset('assets/plugins/metisMenu/dist/metisMenu.css')}}" rel="stylesheet" />

    <!-- Jquery Datatables Css -->
    <link href="{{asset('assets/plugins/DataTables/media/css/dataTables.bootstrap.css')}}" rel="stylesheet" />

    <!-- Pace Loader Css -->
    <link href="{{asset('assets/plugins/pace/themes/white/pace-theme-flash.css')}}" rel="stylesheet" />

    <!-- Custom Css -->
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

    <!-- AdminBSB Themes. You can choose a theme from css/themes instead of get all themes -->
    <link href="{{asset('assets/css/themes/allthemes.css')}}" rel="stylesheet" />

    <!-- Demo Purpose Only -->
    <link href="{{asset('assets/css/demo/setting-box.css')}}" rel="stylesheet" />
    @yield('css')
</head>

<body>
    <div class="all-content-wrapper">
        <!-- Top Bar -->
        <header>
            <nav class="navbar navbar-default">
                <!-- Search Bar -->
                <div class="search-bar">
                    <div class="search-icon">
                        <i class="material-icons">search</i>
                    </div>
                    <input type="text" placeholder="Start typing...">
                    <div class="close-search js-close-search">
                        <i class="material-icons">close</i>
                    </div>
                </div>
                <!-- #END# Search Bar -->

                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                            <i class="material-icons">swap_vert</i>
                        </button>
                        <a href="javascript:void(0);" class="left-toggle-left-sidebar js-left-toggle-left-sidebar">
                            <i class="material-icons">menu</i>
                        </a>
                        <!-- Logo -->
                        <a class="navbar-brand" href="index.html">
                            <span class="logo-minimized">AS</span>
                            <span class="logo">AdminBSB - Sensitive</span>
                        </a>
                        <!-- #END# Logo -->
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="javascript:void(0);" class="toggle-left-sidebar js-toggle-left-sidebar">
                                    <i class="material-icons">menu</i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Email -->
                            <li class="dropdown email-menu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="material-icons">email</i>
                                    <span class="label-count">3</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">EMAILS</li>
                                    <li class="body">
                                        <ul class="menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="assets/images/avatars/face4.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>John Doe</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 14 mins ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="assets/images/avatars/face5.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>Francisco Day</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 1 hour ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="assets/images/avatars/face6.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>Maria Doe</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 1 hour ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="assets/images/avatars/face7.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>Connie Craig</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 2 hours ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="assets/images/avatars/face8.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>Agnes Howard</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 1 day ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <img src="assets/images/avatars/face9.jpg" alt="User Avatar" />
                                                    <div class="info">
                                                        <h4>Gina Fletcher</h4>
                                                        <span class="time">
                                                            <i class="material-icons">access_time</i> 2 days ago
                                                        </span>
                                                        <p>
                                                            Lorem ipsum dolor sit amet, ei labore persius usu, consul quaeque
                                                            ne vix
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="javascript:void(0);">View All Emails</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- #END# Email -->
                            <!-- Notifications -->
                            <li class="dropdown notification-menu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">notifications</i>
                                    <span class="label-count">7</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">NOTIFICATIONS</li>
                                    <li class="body">
                                        <ul class="menu">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-success">
                                                        <i class="material-icons">person_add</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4>12 new members joined</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 14 mins ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-info">
                                                        <i class="material-icons">add_shopping_cart</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4>4 sales made</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 22 mins ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-danger">
                                                        <i class="material-icons">delete_forever</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>Nancy Doe</b> deleted account</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 3 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-warning">
                                                        <i class="material-icons">mode_edit</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>Nancy</b> changed name</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 2 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-primary">
                                                        <i class="material-icons">comment</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>John</b> commented your post</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 4 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-success">
                                                        <i class="material-icons">cached</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4><b>John</b> updated status</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> 3 hours ago
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <div class="icon-circle bg-info">
                                                        <i class="material-icons">settings</i>
                                                    </div>
                                                    <div class="menu-info">
                                                        <h4>Settings updated</h4>
                                                        <p>
                                                            <i class="material-icons">access_time</i> Yesterday
                                                        </p>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="javascript:void(0);">View All Notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- #END# Notifications -->
                            <!-- Tasks -->
                            <li class="dropdown tasks-menu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" role="button">
                                    <i class="material-icons">flag</i>
                                    <span class="label-count">9</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">TASKS</li>
                                    <li class="body">
                                        <ul class="menu tasks">
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Footer display issue
                                                        <small>32%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-danger-important" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 32%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Make new buttons
                                                        <small>45%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-info-important" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 45%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Create new dashboard
                                                        <small>54%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-success-important" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 54%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Solve transition issue
                                                        <small>65%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-warning-important" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 65%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <h4>
                                                        Answer GitHub questions
                                                        <small>92%</small>
                                                    </h4>
                                                    <div class="progress">
                                                        <div class="progress-bar bg-primary-important" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100"
                                                             style="width: 92%">
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <a href="javascript:void(0);">View All Tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- #END# Tasks -->
                            <!-- User Menu -->
                            <li class="dropdown user-menu">
                                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="assets/images/avatars/face2.jpg" alt="User Avatar" />
                                    <span class="hidden-xs">Brandon Sanchez</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="header">
                                        <img src="assets/images/avatars/face2.jpg" alt="User Avatar" />
                                        <div class="user">
                                            Brandon Sanchez
                                            <div class="title">Front-end Developer</div>
                                        </div>
                                    </li>
                                    <li class="body">
                                        <ul>
                                            <li>
                                                <a href="pages/miscellaneous/profile.html">
                                                    <i class="material-icons">account_circle</i> Profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0);">
                                                    <i class="material-icons">lock_open</i> Change Password
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="footer">
                                        <div class="row clearfix">
                                            <div class="col-xs-5">
                                                <a href="pages/examples/locked-screen.html" class="btn btn-default btn-sm btn-block">Log Off</a>
                                            </div>
                                            <div class="col-xs-2"></div>
                                            <div class="col-xs-5">
                                                <a href="javascript:void(0);" class="btn btn-default btn-sm btn-block">Log Out</a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- #END# User Menu -->
                            <li class="pull-right">
                                <a href="javascript:void(0);" class="js-right-sidebar" data-close="true">
                                    <i class="material-icons">more_vert</i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <!-- #END# Top Bar -->
        <!-- Left Menu -->
        <aside class="sidebar">
            <nav class="sidebar-nav">
                <ul class="metismenu">
                    <li class="title">
                        MAIN NAVIGATION
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="menu-toggle">
                            <i class="material-icons">trending_down</i>
                            <span class="nav-label">Multi Level Menu</span>
                        </a>
                        <ul aria-expanded="false">
                            <li><a href="javascript:void(0);">Menu Item - 1</a></li>
                            <li><a href="javascript:void(0);">Menu Item - 2</a></li>
                            <li>
                                <a href="javascript:void(0);" class="menu-toggle">
                                    <span>Level - 2</span>
                                </a>
                                <ul>
                                    <li><a href="javascript:void(0);">Menu Item - 1</a></li>
                                    <li><a href="javascript:void(0);">Menu Item - 2</a></li>
                                </ul>
                            </li>
                            <li><a href="javascript:void(0);">Menu Item - 4</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="pages/changelogs.html">
                            <i class="material-icons">update</i>
                            <span class="nav-label">Changelogs</span>
                        </a>
                    </li>
                    <li>
                        <a href="documents/index.html">
                            <i class="material-icons">book</i>
                            <span class="nav-label">Documents</span>
                        </a>
                    </li>
                    <li class="title">
                        จัดการข้อมูล
                    </li>
                    <li class="{!! preg_match('/room/',URL::current()) ? 'active'  : ''    !!} ">
                        <a href="{{url('room')}}">
                            {{-- <i class="material-icons col-danger">donut_large</i> --}}
                            <span class="nav-label">จัดการข้อมูลห้อง</span>
                        </a>
                    </li>
                    <li class="title">
                        LABELS
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-danger">donut_large</i>
                            <span class="nav-label">Important</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-warning">donut_large</i>
                            <span class="nav-label">Warning</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:void(0);">
                            <i class="material-icons col-info">donut_large</i>
                            <span class="nav-label">Information</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </aside>
        <!-- #END# Left Menu -->
        <!-- Right Sidebar -->
        <aside class="right-sidebar">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="#tab_overview" data-toggle="tab">OVERVIEW</a></li>
                <li role="presentation"><a href="#tab_settings" data-toggle="tab">SETTINGS</a></li>
            </ul>
            <div class="tab-content">
                <div class="right-sidebar-close">
                    <i class="fa fa-times"></i>
                </div>
                <div role="tabpanel" class="tab-pane fade in active" id="tab_overview">
                    <div class="tab-container">
                        <label>UPCOMING EVENTS</label>
                        <ul>
                            <li>
                                <b class="display-block">Business Meeting</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Dinner With John</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Deadline Project For E-Commerce</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Last Check For E-Comerce</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Ask For Vacation</b> Lorem ipsum dolor sit amet
                            </li>
                        </ul>

                        <label>TODO LIST</label>
                        <ul>
                            <li>
                                <b class="display-block">Get To Know More HTML5</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Get To Know More CSS3 - Transitions</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Learn AngularJS</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Learn AngularJS Routing</b> Lorem ipsum dolor sit amet
                            </li>
                            <li>
                                <b class="display-block">Get To Know More jQuery v3</b> Lorem ipsum dolor sit amet
                            </li>
                        </ul>
                    </div>
                </div>
                <div role="tabpanel" class="tab-pane fade" id="tab_settings">
                    <div class="tab-container">
                        <label>GENERAL SETTINGS</label>
                        <ul>
                            <li>
                                <span>Report Panel Usage</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                            <li>
                                <span>Email Redirect</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" />
                                </div>
                            </li>
                        </ul>

                        <label>SYSTEM SETTINGS</label>
                        <ul>
                            <li>
                                <span>Notifications</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                            <li>
                                <span>Auto Updates</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                        </ul>

                        <label>ACCOUNT SETTINGS</label>
                        <ul>
                            <li>
                                <span>Offline</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" />
                                </div>
                            </li>
                            <li>
                                <span>Location Permission</span>
                                <div class="switch">
                                    <input type="checkbox" class="js-switch" data-size="small" checked />
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </aside>
        <!-- #END# Right Sidebar -->
        <section class="content dashboard">
                @yield('content')
            
        </section>
        <!-- Footer -->
        <footer>
            <div class="container-fluid">
                <div class="row clearfix">
                    <div class="col-sm-6">
                        Copyright &copy; 2017, <b>AdminBSB - Sensitive</b>
                    </div>
                    <div class="col-sm-6 align-right">
                        Hand-crafted & Made with love :)
                    </div>
                </div>
            </div>
        </footer>
        <!-- #END# Footer -->
    </div>

    <!-- Jquery Core Js -->
    <script src="{{asset('assets/plugins/jquery/dist/jquery.min.js')}}"></script>

    <!-- JQuery UI Js -->
    <script src="{{asset('assets/plugins/jquery-ui/jquery-ui.js')}}"></script>

    <!-- Bootstrap Core Js -->
    <script src="{{asset('assets/plugins/bootstrap/dist/js/bootstrap.min.js')}}"></script>

    <!-- Pace Loader Js -->
    <script src="{{asset('assets/plugins/pace/pace.js')}}"></script>

    <!-- Screenfull Js -->
    <script src="{{asset('assets/plugins/screenfull/src/screenfull.js')}}"></script>

    <!-- Metis Menu Js -->
    <script src="{{asset('assets/plugins/metisMenu/dist/metisMenu.js')}}"></script>

    <!-- Jquery Slimscroll Js -->
    <script src="{{asset('assets/plugins/jquery-slimscroll/jquery.slimscroll.js')}}"></script>

    <!-- Switchery Js -->
    <script src="{{asset('assets/plugins/switchery/dist/switchery.js')}}"></script>

    <!-- iCheck Js -->
    <script src="{{asset('assets/plugins/iCheck/icheck.js')}}"></script>

    <!-- Jquery Sparkline Js -->
    <script src="{{asset('assets/plugins/jquery-sparkline/dist/jquery.sparkline.js')}}"></script>

    <!-- Flot Chart Js -->
    <script src="{{asset('assets/plugins/flot/jquery.flot.js')}}"></script>
    <script src="{{asset('assets/plugins/flot-spline/js/jquery.flot.spline.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{asset('assets/plugins/flot/jquery.flot.time.js')}}"></script>

    <!-- JQuery Datatables Js -->
    <script src="{{asset('assets/plugins/DataTables/media/js/jquery.dataTables.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/media/js/dataTables.bootstrap.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/extensions/export/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/extensions/export/buttons.bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/extensions/export/buttons.flash.min.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/extensions/export/jszip.min.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/extensions/export/pdfmake.min.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/extensions/export/vfs_fonts.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/extensions/export/buttons.html5.min.js')}}"></script>
    <script src="{{asset('assets/plugins/DataTables/extensions/export/buttons.print.min.js')}}"></script>

    <!-- Peity Js -->
    <script src="{{asset('assets/plugins/peity/jquery.peity.js')}}"></script>

    <!-- Custom Js -->
    <script src="{{asset('assets/js/admin.js')}}"></script>
    <script src="{{asset('assets/js/pages/dashboard/dashboard.js')}}"></script>

    <!-- Google Analytics Code -->
    <script src="{{asset('assets/js/google-analytics.js')}}"></script>

    <!-- Demo Purpose Only -->
    <script src="{{asset('assets/js/demo.js')}}"></script>
    @yield('js')
</body>

</html>