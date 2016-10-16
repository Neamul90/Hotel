<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <!-- BEGIN HEAD -->
    <!-- Mirrored from thevectorlab.net/metrolab/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2016 14:57:17 GMT -->
    <head>
        <meta charset="utf-8" />
        <title>Kuakata Grand Hotel &amp; Sea Resorts | Presidential Suite</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="description" />
        <meta content="Mosaddek" name="author" />
        <link href="{{asset('admin_assets/assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" />
        <link href="{{asset('admin_assets/assets/bootstrap/css/bootstrap-responsive.min.css')}}" rel="stylesheet" />
        <link href="{{asset('admin_assets/assets/bootstrap/css/bootstrap-fileupload.css')}}" rel="stylesheet" />
        <link href="{{asset('admin_assets/assets/font-awesome/css/font-awesome.css')}}" rel="stylesheet" />
        <link href="{{asset('admin_assets/css/style.css')}}" rel="stylesheet" />
        <link href="{{asset('admin_assets/css/style-responsive.css')}}" rel="stylesheet" />
        <link href="{{asset('admin_assets/css/style-default.css')}}" rel="stylesheet" id="style_color" />
        <link href="{{asset('admin_assets/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css')}}" rel="stylesheet" />
        <link href="{{asset('admin_assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css')}}" rel="stylesheet" type="text/css" media="screen"/>
        <link rel="stylesheet" type="text/css" href="{{asset('admin_assets/assets/chosen-bootstrap/chosen/chosen.css')}}" />

<link rel="stylesheet" type="text/css" href="{{asset('admin_assets/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css')}}" />

        <script>
            function check_delete_info() {
                var check = confirm('Are you sure to delete this');
                if (check) {
                    return true;
                } else {
                    return false;
                }
            }
        </script>
    </head>
    <!-- END HEAD -->
    <!-- BEGIN BODY -->
    <body class="fixed-top">
        <!-- BEGIN HEADER -->
        <div id="header" class="navbar navbar-inverse navbar-fixed-top">
            <!-- BEGIN TOP NAVIGATION BAR -->
            <div class="navbar-inner">
                <div class="container-fluid">
                    <!--BEGIN SIDEBAR TOGGLE-->
                    <div class="sidebar-toggle-box hidden-phone">
                        <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
                    </div>
                    <!--END SIDEBAR TOGGLE-->
                    <!-- BEGIN LOGO -->
                    <a class="brand" href="{{ URL::to('/dashboard') }}">
                        <img src="{{asset('admin_assets/img/logo_1.png')}}" alt="Metro Lab" />
                    </a>
                    <!-- END LOGO -->
                    <!-- BEGIN RESPONSIVE MENU TOGGLER -->
                    <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="arrow"></span>
                    </a>
                    <!-- END RESPONSIVE MENU TOGGLER -->
                    <div id="top_menu" class="nav notify-row">
                        <!-- BEGIN NOTIFICATION -->
                        <ul class="nav top-menu">
                            <!-- BEGIN SETTINGS -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-tasks"></i>
                                    <span class="badge badge-important">6</span>
                                </a>
                                <ul class="dropdown-menu extended tasks-bar">
                                    <li>
                                        <p>You have 6 pending tasks</p>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-info">
                                                <div class="desc">Dashboard v1.3</div>
                                                <div class="percent">44%</div>
                                            </div>
                                            <div class="progress progress-striped active no-margin-bot">
                                                <div class="bar" style="width: 44%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-info">
                                                <div class="desc">Database Update</div>
                                                <div class="percent">65%</div>
                                            </div>
                                            <div class="progress progress-striped progress-success active no-margin-bot">
                                                <div class="bar" style="width: 65%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-info">
                                                <div class="desc">Iphone Development</div>
                                                <div class="percent">87%</div>
                                            </div>
                                            <div class="progress progress-striped progress-info active no-margin-bot">
                                                <div class="bar" style="width: 87%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-info">
                                                <div class="desc">Mobile App</div>
                                                <div class="percent">33%</div>
                                            </div>
                                            <div class="progress progress-striped progress-warning active no-margin-bot">
                                                <div class="bar" style="width: 33%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="task-info">
                                                <div class="desc">Dashboard v1.3</div>
                                                <div class="percent">90%</div>
                                            </div>
                                            <div class="progress progress-striped progress-danger active no-margin-bot">
                                                <div class="bar" style="width: 90%;"></div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="external">
                                        <a href="#">See All Tasks</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END SETTINGS -->
                            <!-- BEGIN INBOX DROPDOWN -->
                            <li class="dropdown" id="header_inbox_bar">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="icon-envelope-alt"></i>
                                    <span class="badge badge-important">5</span>
                                </a>
                                <ul class="dropdown-menu extended inbox">
                                    <li>
                                        <p>You have 5 new messages</p>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="photo"><img src="{{asset('admin_assets/img/avatar-mini.png')}}" alt="avatar" /></span>
                                            <span class="subject">
                                                <span class="from">Jonathan Smith</span>
                                                <span class="time">Just now</span>
                                            </span>
                                            <span class="message">
                                                Hello, this is an example msg.
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="photo"><img src="{{asset('admin_assets/img/avatar-mini.png')}}" alt="avatar" /></span>
                                            <span class="subject">
                                                <span class="from">Jhon Doe</span>
                                                <span class="time">10 mins</span>
                                            </span>
                                            <span class="message">
                                                Hi, Jhon Doe Bhai how are you ?
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="photo"><img src="{{asset('admin_assets/img/avatar-mini.png')}}" alt="avatar" /></span>
                                            <span class="subject">
                                                <span class="from">Jason Stathum</span>
                                                <span class="time">3 hrs</span>
                                            </span>
                                            <span class="message">
                                                This is awesome dashboard.
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="photo"><img src="{{asset('admin_assets/img/avatar-mini.png')}}" alt="avatar" /></span>
                                            <span class="subject">
                                                <span class="from">Jondi Rose</span>
                                                <span class="time">Just now</span>
                                            </span>
                                            <span class="message">
                                                Hello, this is metrolab
                                            </span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">See all messages</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END INBOX DROPDOWN -->
                            <!-- BEGIN NOTIFICATION DROPDOWN -->
                            <li class="dropdown" id="header_notification_bar">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">

                                    <i class="icon-bell-alt"></i>
                                    <span class="badge badge-warning">7</span>
                                </a>
                                <ul class="dropdown-menu extended notification">
                                    <li>
                                        <p>You have 7 new notifications</p>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            Server #3 overloaded.
                                            <span class="small italic">34 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-warning"><i class="icon-bell"></i></span>
                                            Server #10 not respoding.
                                            <span class="small italic">1 Hours</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-important"><i class="icon-bolt"></i></span>
                                            Database overloaded 24%.
                                            <span class="small italic">4 hrs</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-success"><i class="icon-plus"></i></span>
                                            New user registered.
                                            <span class="small italic">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="label label-info"><i class="icon-bullhorn"></i></span>
                                            Application error.
                                            <span class="small italic">10 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">See all notifications</a>
                                    </li>
                                </ul>
                            </li>
                            <!-- END NOTIFICATION DROPDOWN -->

                        </ul>
                    </div>
                    <!-- END  NOTIFICATION -->
                    <div class="top-nav ">
                        <ul class="nav pull-right top-menu" >
                            <!-- BEGIN SUPPORT -->
                            <li class="dropdown mtop5">

                                <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Chat">
                                    <i class="icon-comments-alt"></i>
                                </a>
                            </li>
                            <li class="dropdown mtop5">
                                <a class="dropdown-toggle element" data-placement="bottom" data-toggle="tooltip" href="#" data-original-title="Help">
                                    <i class="icon-headphones"></i>
                                </a>
                            </li>
                            <!-- END SUPPORT -->
                            <!-- BEGIN USER LOGIN DROPDOWN -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="{{asset('admin_assets/img/avatar1_small.jpg')}}" alt="">
                                    <span class="username">{{Session::get('firstname')}}</span>
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu extended logout">
                                    <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                                    <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                                    <li><a href="{{URL::to('/logout')}}"><i class="icon-key"></i> Log Out</a></li>
                                </ul>
                            </li>
                            <!-- END USER LOGIN DROPDOWN -->
                        </ul>
                        <!-- END TOP NAVIGATION MENU -->
                    </div>
                </div>
            </div>
            <!-- END TOP NAVIGATION BAR -->
        </div>
        <!-- END HEADER -->
        <!-- BEGIN CONTAINER -->
        <div id="container" class="row-fluid">
            <!-- BEGIN SIDEBAR -->
            <div class="sidebar-scroll">
                @yield('sidebar')
            </div>
            <!-- END SIDEBAR -->
            <!-- BEGIN PAGE -->  
            <div id="main-content">
                @yield('content')
            </div>
            <!-- END PAGE -->  
        </div>
        <!-- END CONTAINER -->

        <!-- BEGIN FOOTER -->
        <div id="footer">
            2016 &copy; HashTag Group.
        </div>
           <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
        <script src="{{asset('admin_assets/js/jquery-1.8.3.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery.nicescroll.js')}}" type="text/javascript"></script>
        <script type="text/javascript" src="{{asset('admin_assets/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin_assets/assets/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
        <script src="{{asset('admin_assets/assets/fullcalendar/fullcalendar/fullcalendar.min.js')}}"></script>
        <script src="{{asset('admin_assets/assets/bootstrap/js/bootstrap.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin_assets/assets/ckeditor/ckeditor.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap/js/bootstrap-fileupload.js')}}"></script>
        <script src="{{asset('admin_assets/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin_assets/js/jquery.sparkline.js')}}" type="text/javascript"></script>
        <script src="{{asset('admin_assets/assets/chart-master/Chart.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/common-scripts.js')}}"></script>
        <script src="{{asset('admin_assets/js/easy-pie-chart.js')}}"></script>
        <script src="{{asset('admin_assets/js/sparkline-chart.js')}}"></script>
        <script src="{{asset('admin_assets/js/home-page-calender.js')}}"></script>
        <script src="{{asset('admin_assets/js/home-chartjs.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin_assets/assets/chosen-bootstrap/chosen/chosen.jquery.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/form-component.js')}}"></script>
        <script src="{{asset('admin_assets/js/countries.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery.blockui.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin_assets/assets/uniform/jquery.uniform.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin_assets/assets/data-tables/jquery.dataTables.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin_assets/assets/data-tables/DT_bootstrap.js')}}"></script>
        <script src="{{asset('admin_assets/js/jquery.scrollTo.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/dynamic-table.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js')}}"></script>

        
        
        
        
        
        
        
        
    <script type="text/javascript" src="{{asset('admin_assets/assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js')}}"></script>


    </body>
</html>