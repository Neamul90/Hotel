<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<!-- Mirrored from thevectorlab.net/metrolab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2016 15:02:21 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Form Component</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
    <link href="assets/bootstrap/css/bootstrap-fileupload.css" rel="stylesheet" />
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/style-default.css" rel="stylesheet" id="style_color" />

    <link href="assets/fancybox/source/jquery.fancybox.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/uniform/css/uniform.default.css" />

    <link rel="stylesheet" type="text/css" href="assets/chosen-bootstrap/chosen/chosen.css" />
    <link rel="stylesheet" type="text/css" href="assets/jquery-tags-input/jquery.tagsinput.css" />
    <link rel="stylesheet" type="text/css" href="assets/clockface/css/clockface.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-datepicker/css/datepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-timepicker/compiled/timepicker.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-colorpicker/css/colorpicker.css" />
    <link rel="stylesheet" href="assets/bootstrap-toggle-buttons/static/stylesheets/bootstrap-toggle-buttons.css" />
    <link rel="stylesheet" type="text/css" href="assets/bootstrap-daterangepicker/daterangepicker.css" />

    <link rel="stylesheet" href="../../code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />


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
               <a class="brand" href="index-2.html">
                   <img src="img/logo.png" alt="Metro Lab" />
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
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
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
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
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
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
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
                                       <span class="photo"><img src="img/avatar-mini.png" alt="avatar" /></span>
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
                               <img src="img/avatar1_small.jpg" alt="">
                               <span class="username">Jhon Doe</span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                               <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
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
          <div id="sidebar" class="nav-collapse collapse">

              <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
              <div class="navbar-inverse">
                  <form class="navbar-search visible-phone">
                      <input type="text" class="search-query" placeholder="Search" />
                  </form>
              </div>
              <!-- END RESPONSIVE QUICK SEARCH FORM -->
              <!-- BEGIN SIDEBAR MENU -->
              <ul class="sidebar-menu">
                  <li class="sub-menu">
                      <a class="" href="index-2.html">
                          <i class="icon-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-book"></i>
                          <span>UI Elements</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="general.html">General</a></li>
                          <li><a class="" href="button.html">Buttons</a></li>
                          <li><a class="" href="slider.html">Sliders</a></li>
                          <li><a class="" href="metro_view.html">Metro View</a></li>
                          <li><a class="" href="tabs_accordion.html">Tabs & Accordions</a></li>
                          <li><a class="" href="typography.html">Typography</a></li>
                          <li><a class="" href="tree_view.html">Tree View</a></li>
                          <li><a class="" href="nestable.html">Nestable List</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-cogs"></i>
                          <span>Components</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="calendar.html">Calendar</a></li>
                          <li><a class="" href="grids.html">Grids</a></li>
                          <li><a class="" href="chartjs.html">Chart Js</a></li>
                          <li><a class="" href="flot_chart.html">Flot Charts</a></li>
                          <li><a class="" href="gallery.html"> Gallery</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu active">
                      <a href="javascript:;" class="">
                          <i class="icon-tasks"></i>
                          <span>Form Stuff</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="form_layout.html">Form Layouts</a></li>
                          <li class="active"><a class="" href="form_component.html">Form Components</a></li>
                          <li><a class="" href="form_wizard.html">Form Wizard</a></li>
                          <li><a class="" href="form_validation.html">Form Validation</a></li>
                          <li><a class="" href="dropzone.html">Dropzone File Upload </a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-th"></i>
                          <span>Data Tables</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="basic_table.html">Basic Table</a></li>
                          <li><a class="" href="dynamic_table.html">Dynamic Table</a></li>
                          <li><a class="" href="editable_table.html">Editable Table</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-fire"></i>
                          <span>Icons</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="font_awesome.html">Font Awesome</a></li>
                          <li><a class="" href="glyphicons.html">Glyphicons</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="javascript:;">
                          <i class="icon-trophy"></i>
                          <span>Portlets</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a href="general_portlet.html" class=""> General Portlet</a></li>
                          <li><a href="draggable_portlet.html" class="">Draggable Portlet</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a class="" href="javascript:;">
                          <i class="icon-map-marker"></i>
                          <span>Maps</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a href="vector_map.html" class="">Vector Maps</a></li>
                          <li><a href="google_map.html" class="">Google Map</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-file-alt"></i>
                          <span>Sample Pages</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="blank.html">Blank Page</a></li>
                          <li><a class="" href="blog.html">Blog</a></li>
                          <li><a class="" href="timeline.html">Timeline</a></li>
                          <li><a class="" href="profile.html">Profile</a></li>
                          <li><a class="" href="about_us.html">About Us</a></li>
                          <li><a class="" href="contact_us.html">Contact Us</a></li>
                      </ul>
                  </li>
                  <li class="sub-menu">
                      <a href="javascript:;" class="">
                          <i class="icon-glass"></i>
                          <span>Extra</span>
                          <span class="arrow"></span>
                      </a>
                      <ul class="sub">
                          <li><a class="" href="lock.html">Lock Screen</a></li>
                          <li><a class="" href="invoice.html">Invoice</a></li>
                          <li><a class="" href="pricing_tables.html">Pricing Tables</a></li>
                          <li><a class="" href="search_result.html">Search Result</a></li>
                          <li><a class="" href="faq.html">FAQ</a></li>
                          <li><a class="" href="404.html">404 Error</a></li>
                          <li><a class="" href="500.html">500 Error</a></li>
                      </ul>
                  </li>

                  <li>
                      <a class="" href="login.html">
                          <i class="icon-user"></i>
                          <span>Login Page</span>
                      </a>
                  </li>
              </ul>
              <!-- END SIDEBAR MENU -->
          </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN THEME CUSTOMIZER-->
                   <div id="theme-change" class="hidden-phone">
                       <i class="icon-cogs"></i>
                        <span class="settings">
                            <span class="text">Theme Color:</span>
                            <span class="colors">
                                <span class="color-default" data-style="default"></span>
                                <span class="color-green" data-style="green"></span>
                                <span class="color-gray" data-style="gray"></span>
                                <span class="color-purple" data-style="purple"></span>
                                <span class="color-red" data-style="red"></span>
                            </span>
                        </span>
                   </div>
                   <!-- END THEME CUSTOMIZER-->
                  <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Form Components
                   </h3>
                   <ul class="breadcrumb">
                       <li>
                           <a href="#">Home</a>
                           <span class="divider">/</span>
                       </li>
                       <li>
                           <a href="#">Form Stuff</a>
                           <span class="divider">/</span>
                       </li>
                       <li class="active">
                           Form Components
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Sample Form </h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                            <div class="control-group">
                                <label class="control-label">Input</label>
                                <div class="controls">
                                    <input type="text" class="span6 " />
                                    <span class="help-inline">Some hint here</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Disabled Input</label>
                                <div class="controls">
                                    <input class="span6 " type="text" placeholder="Disabled input here..." disabled />
                                    <span class="help-inline">Some hint here</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Readonly Input</label>
                                <div class="controls">
                                    <input class="span6 " type="text" placeholder="Readonly input here..." disabled />
                                    <span class="help-inline">Some hint here</span>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Input with Tooltip</label>
                                <div class="controls">
                                    <input type="text" class="span6  tooltips" data-trigger="hover" data-original-title="Tooltip text goes here. Tooltip text goes here." />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Input with Popover</label>
                                <div class="controls">
                                    <input type="text" class="span6  popovers" data-trigger="hover" data-content="Popover body goes here. Popover body goes here." data-original-title="Popover header" />
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Auto Complete</label>
                                <div class="controls">
                                    <input type="text" class="span6 " style="margin: 0 auto;" data-provide="typeahead" data-items="4" data-source="[&quot;Alabama&quot;,&quot;Alaska&quot;,&quot;Arizona&quot;,&quot;Arkansas&quot;,&quot;California&quot;,&quot;Colorado&quot;,&quot;Connecticut&quot;,&quot;Delaware&quot;,&quot;Florida&quot;,&quot;Georgia&quot;,&quot;Hawaii&quot;,&quot;Idaho&quot;,&quot;Illinois&quot;,&quot;Indiana&quot;,&quot;Iowa&quot;,&quot;Kansas&quot;,&quot;Kentucky&quot;,&quot;Louisiana&quot;,&quot;Maine&quot;,&quot;Maryland&quot;,&quot;Massachusetts&quot;,&quot;Michigan&quot;,&quot;Minnesota&quot;,&quot;Mississippi&quot;,&quot;Missouri&quot;,&quot;Montana&quot;,&quot;Nebraska&quot;,&quot;Nevada&quot;,&quot;New Hampshire&quot;,&quot;New Jersey&quot;,&quot;New Mexico&quot;,&quot;New York&quot;,&quot;North Dakota&quot;,&quot;North Carolina&quot;,&quot;Ohio&quot;,&quot;Oklahoma&quot;,&quot;Oregon&quot;,&quot;Pennsylvania&quot;,&quot;Rhode Island&quot;,&quot;South Carolina&quot;,&quot;South Dakota&quot;,&quot;Tennessee&quot;,&quot;Texas&quot;,&quot;Utah&quot;,&quot;Vermont&quot;,&quot;Virginia&quot;,&quot;Washington&quot;,&quot;West Virginia&quot;,&quot;Wisconsin&quot;,&quot;Wyoming&quot;]" />
                                    <p class="help-block">Start typing to auto complete!. E.g: Florida</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email Address Input</label>
                                <div class="controls">
                                    <div class="input-prepend">
                                        <span class="add-on">@</span><input class=" " type="text" placeholder="Email Address" />
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Email Address Input</label>
                                <div class="controls">
                                    <div class="input-icon left">
                                        <i class="icon-envelope"></i>
                                        <input class=" " type="text" placeholder="Email Address" />
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Currency Input</label>
                                <div class="controls">
                                    <div class="input-prepend input-append">
                                        <span class="add-on">$</span><input class=" " type="text" /><span class="add-on">.00</span>
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Default Dropdown</label>
                                <div class="controls">
                                    <select class="span6 " data-placeholder="Choose a Category" tabindex="1">
                                        <option value="">Select...</option>
                                        <option value="Category 1">Category 1</option>
                                        <option value="Category 2">Category 2</option>
                                        <option value="Category 3">Category 5</option>
                                        <option value="Category 4">Category 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Default Dropdown(Multiple)</label>
                                <div class="controls">
                                    <select class="span6 " multiple="multiple" data-placeholder="Choose a Category" tabindex="1">
                                        <option value="Category 1">Category 1</option>
                                        <option value="Category 2">Category 2</option>
                                        <option value="Category 3">Category 5</option>
                                        <option value="Category 4">Category 4</option>
                                        <option value="Category 3">Category 6</option>
                                        <option value="Category 4">Category 7</option>
                                        <option value="Category 3">Category 8</option>
                                        <option value="Category 4">Category 9</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Custom Dropdown</label>
                                <div class="controls">
                                    <select class="span6 chzn-select" data-placeholder="Choose a Category" tabindex="1">
                                        <option value=""></option>
                                        <option value="Category 1">Category 1</option>
                                        <option value="Category 2">Category 2</option>
                                        <option value="Category 3">Category 5</option>
                                        <option value="Category 4">Category 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Grouped Dropdown</label>
                                <div class="controls">
                                    <select data-placeholder="Your Favorite Team" class="chzn-select span6" tabindex="-1" id="selS0V">
                                        <option value=""></option>
                                        <optgroup label="NFC EAST">
                                            <option>Dallas Cowboys</option>
                                            <option>New York Giants</option>
                                            <option>Philadelphia Eagles</option>
                                            <option>Washington Redskins</option>
                                        </optgroup>
                                        <optgroup label="NFC NORTH">
                                            <option>Chicago Bears</option>
                                            <option>Detroit Lions</option>
                                            <option>Green Bay Packers</option>
                                            <option>Minnesota Vikings</option>
                                        </optgroup>
                                        <optgroup label="NFC SOUTH">
                                            <option>Atlanta Falcons</option>
                                            <option>Carolina Panthers</option>
                                            <option>New Orleans Saints</option>
                                            <option>Tampa Bay Buccaneers</option>
                                        </optgroup>
                                        <optgroup label="NFC WEST">
                                            <option>Arizona Cardinals</option>
                                            <option>St. Louis Rams</option>
                                            <option>San Francisco 49ers</option>
                                            <option>Seattle Seahawks</option>
                                        </optgroup>
                                        <optgroup label="AFC EAST">
                                            <option>Buffalo Bills</option>
                                            <option>Miami Dolphins</option>
                                            <option>New England Patriots</option>
                                            <option>New York Jets</option>
                                        </optgroup>
                                        <optgroup label="AFC NORTH">
                                            <option>Baltimore Ravens</option>
                                            <option>Cincinnati Bengals</option>
                                            <option>Cleveland Browns</option>
                                            <option>Pittsburgh Steelers</option>
                                        </optgroup>
                                        <optgroup label="AFC SOUTH">
                                            <option>Houston Texans</option>
                                            <option>Indianapolis Colts</option>
                                            <option>Jacksonville Jaguars</option>
                                            <option>Tennessee Titans</option>
                                        </optgroup>
                                        <optgroup label="AFC WEST">
                                            <option>Denver Broncos</option>
                                            <option>Kansas City Chiefs</option>
                                            <option>Oakland Raiders</option>
                                            <option>San Diego Chargers</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label">Multiple Dropdown Select</label>
                                <div class="controls">
                                    <select data-placeholder="Your Favorite Teams" class="chzn-select span6" multiple="multiple" tabindex="6">
                                        <option value=""></option>
                                        <optgroup label="NFC EAST">
                                            <option>Dallas Cowboys</option>
                                            <option>New York Giants</option>
                                            <option>Philadelphia Eagles</option>
                                            <option>Washington Redskins</option>
                                        </optgroup>
                                        <optgroup label="NFC NORTH">
                                            <option selected>Chicago Bears</option>
                                            <option>Detroit Lions</option>
                                            <option>Green Bay Packers</option>
                                            <option>Minnesota Vikings</option>
                                        </optgroup>
                                        <optgroup label="NFC SOUTH">
                                            <option>Atlanta Falcons</option>
                                            <option selected>Carolina Panthers</option>
                                            <option>New Orleans Saints</option>
                                            <option>Tampa Bay Buccaneers</option>
                                        </optgroup>
                                        <optgroup label="NFC WEST">
                                            <option>Arizona Cardinals</option>
                                            <option>St. Louis Rams</option>
                                            <option>San Francisco 49ers</option>
                                            <option>Seattle Seahawks</option>
                                        </optgroup>
                                        <optgroup label="AFC EAST">
                                            <option>Buffalo Bills</option>
                                            <option>Miami Dolphins</option>
                                            <option>New England Patriots</option>
                                            <option>New York Jets</option>
                                        </optgroup>
                                        <optgroup label="AFC NORTH">
                                            <option>Baltimore Ravens</option>
                                            <option>Cincinnati Bengals</option>
                                            <option>Cleveland Browns</option>
                                            <option>Pittsburgh Steelers</option>
                                        </optgroup>
                                        <optgroup label="AFC SOUTH">
                                            <option>Houston Texans</option>
                                            <option>Indianapolis Colts</option>
                                            <option>Jacksonville Jaguars</option>
                                            <option>Tennessee Titans</option>
                                        </optgroup>
                                        <optgroup label="AFC WEST">
                                            <option>Denver Broncos</option>
                                            <option>Kansas City Chiefs</option>
                                            <option>Oakland Raiders</option>
                                            <option>San Diego Chargers</option>
                                        </optgroup>
                                    </select>
                                </div>
                            </div>
                            <div class="control-group">
                                <label class="control-label"> Dropdown Diselect</label>
                                <div class="controls">
                                    <select data-placeholder="Your Favorite Type of Bear" class="chzn-select-deselect span6" tabindex="-1" id="selCSI">
                                        <option value=""></option>
                                        <option>American Black Bear</option>
                                        <option>Asiatic Black Bear</option>
                                        <option>Brown Bear</option>
                                        <option>Giant Panda</option>
                                        <option selected="">Sloth Bear</option>
                                        <option>Sun Bear</option>
                                        <option>Polar Bear</option>
                                        <option>Spectacled Bear</option>
                                    </select>
                                </div>
                            </div>

                            <div class="control-group">
                                <label class="control-label">Textarea</label>
                                <div class="controls">
                                    <textarea class="span6 " rows="3"></textarea>
                                </div>
                            </div>
                            <div class="form-actions">
                                <button type="submit" class="btn btn-success">Submit</button>
                                <button type="button" class="btn">Cancel</button>
                            </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget orange">
                        <div class="widget-title">
                            <h4>
                                <i class="icon-reorder"></i> Dual Select
                            </h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN DUAL SELECT-->
                            <form name="form1" method="post" action="#" id="form1">
                                <div>
                                    <input type="hidden" name="__VIEWSTATE" id="__VIEWSTATE" value="/wEPDwUKMTk5MjI0ODUwOWRkJySmk0TGHOhSY+d9BU9NHeCKW6o=" />
                                </div>
                                <div>
                                    <table style="width: 100%;" class="">
                                        <tr>
                                            <td style="width: 35%">
                                                <div class="d-sel-filter">
                                                    <span>Filter:</span>
                                                    <input type="text" id="box1Filter" />
                                                    <button type="button" class="btn" id="box1Clear">X</button>
                                                </div>

                                                <select id="box1View" multiple="multiple" style="height:300px;width:75%">

                                                    <option value="501649">2008-2009 "Mini" Baja</option>

                                                    <option value="501497">AAPA - Asian American Psychological Association</option>

                                                    <option value="501053">Academy of Film Geeks</option>

                                                    <option value="500001">Accounting Association</option>

                                                    <option value="501227">ACLU</option>

                                                    <option value="501610">Active Minds</option>

                                                    <option value="501514">Activism with A Reel Edge (A.W.A.R.E.)</option>

                                                    <option value="501656">Adopt a Grandparent Program</option>

                                                    <option value="501050">Africa Awareness Student Organization</option>

                                                    <option value="501075">African Diasporic Cultural RC Interns</option>

                                                    <option value="501493">Agape</option>

                                                    <option value="501562">AGE-Alliance for Graduate Excellence</option>

                                                    <option value="500676">AICHE (American Inst of Chemical Engineers)</option>

                                                    <option value="501460">AIDS Sensitivity Awareness Project ASAP</option>

                                                    <option value="500004">Aikido Club</option>

                                                    <option value="500336">Akanke</option>

                                                </select><br/>

                                                <span id="box1Counter" class="countLabel"></span>

                                                <select id="box1Storage">

                                                </select>
                                            </td>
                                            <td style="width: 21%; vertical-align: middle">
                                                <button id="to2" class="btn" type="button">&nbsp;>&nbsp;</button>

                                                <button id="allTo2" class="btn" type="button">&nbsp;>>&nbsp;</button>

                                                <button id="allTo1" class="btn" type="button">&nbsp;<<&nbsp;</button>

                                                <button id="to1" class="btn" type="button">&nbsp;<&nbsp;</button>
                                            </td>
                                            <td style="width: 35%">
                                                <div class="d-sel-filter">
                                                    <span>Filter:</span>
                                                    <input type="text" id="box2Filter" />
                                                    <button type="button" class="btn" id="box2Clear">X</button>
                                                </div>

                                                <select id="box2View" multiple="multiple" style="height:300px;width:75%;">

                                                </select><br/>

                                                <span id="box2Counter" class="countLabel"></span>

                                                <select id="box2Storage">

                                                </select>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="mtop20">
                                    <input type="submit" value="Submit" class="btn"/>
                                </div>
                            </form>
                            <!-- END DUAL SELECT-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget purple">
                        <div class="widget-title">
                            <h4>
                                <i class="icon-reorder"></i> Tags Input
                            </h4>
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Default</label>
                                    <div class="controls">
                                        <input id="tags_1" type="text" class="tags" value="php,ios,javascript,ruby,android,kindle" />
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Fixed Width</label>
                                    <div class="controls">
                                        <input id="tags_2" type="text" class="tags" value="tag1,tag2" />
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN widget-->
                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>
                                Masked inputs
                            </h4>
                            <span class="tools">
                               <a class="icon-chevron-down" href="javascript:;"></a>
                               <a class="icon-remove" href="javascript:;"></a>
                            </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">ISBN 1</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" data-mask="999-99-999-9999-9" class="span5">
                                        <span class="help-inline">999-99-999-9999-9</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">ISBN 2</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" data-mask="999 99 999 9999 9" class="span5">
                                        <span class="help-inline">999 99 999 9999 9</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">ISBN 3</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" data-mask="999/99/999/9999/9" class="span5">
                                        <span class="help-inline">999/99/999/9999/9</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">IPV4</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" data-mask="999.999.999.9999" class="span5">
                                        <span class="help-inline">192.168.110.310</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">IPV6</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" data-mask="9999:9999:9999:9:999:9999:9999:9999" class="span5">
                                        <span class="help-inline">4deg:1340:6547:2:540:h8je:ve73:98pd</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Tax ID</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" data-mask="99-9999999" class="span5">
                                        <span class="help-inline">99-9999999</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Phone</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" data-mask="(999) 999-9999" class="span5">
                                        <span class="help-inline">(999) 999-9999</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Currency</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" data-mask="$ 999,999,999.99" class="span5">
                                        <span class="help-inline">$ 999,999,999.99</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Date</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" data-mask="99/99/9999" class="span5">
                                        <span class="help-inline">dd/mm/yyyy</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Date 2</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" data-mask="99-99-9999" class="span5">
                                        <span class="help-inline">dd-mm-yyyy</span>
                                    </div>
                                </div>

                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                </div>
            </div>
            <div class="row-fluid">
                <div class="span12">
                    <div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>
                                Dropdown
                            </h4>
                                <span class="tools">
                                   <a class="icon-chevron-down" href="javascript:;"></a>
                                   <a class="icon-remove" href="javascript:;"></a>
                                </span>
                        </div>
                        <div class="widget-body form switch-form">
                            <div class="widget-body form">
                                <!-- BEGIN FORM-->
                                <form class="form-horizontal" action="#">
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label">Right Action Input</label>
                                                <div class="controls">
                                                    <div class="input-append">
                                                        <input type="text" class=" medium">
                                                        <div class="btn-group">
                                                            <button data-toggle="dropdown" class="btn dropdown-toggle">
                                                                Action <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label"> Right Input Dropup</label>
                                                <div class="controls">
                                                    <div class="input-append">
                                                        <input class="medium" type="text">
                                                        <div class="btn-group dropup">
                                                            <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Action <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu pull-right">
                                                                <li><a href="#">Action</a>
                                                                </li>
                                                                <li><a href="#">Another action</a>
                                                                </li>
                                                                <li><a href="#">Something else here</a>
                                                                </li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                        <div class="span6">
                                            <div class="control-group">
                                                <label class="control-label">Left Action Input</label>
                                                <div class="controls">
                                                    <div class="input-prepend">
                                                        <div class="btn-group">
                                                            <button data-toggle="dropdown" class="btn dropdown-toggle">
                                                                Action
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /btn-group -->
                                                        <input type="text" class=" medium">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="control-group">
                                                <label class="control-label">Left Input Dropup</label>
                                                <div class="controls">
                                                    <div class="input-prepend">
                                                        <div class="btn-group dropup">
                                                            <button data-toggle="dropdown" class="btn dropdown-toggle">
                                                                Action
                                                                <span class="caret"></span>
                                                            </button>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="#">Action</a></li>
                                                                <li><a href="#">Another action</a></li>
                                                                <li><a href="#">Something else here</a></li>
                                                                <li class="divider"></li>
                                                                <li><a href="#">Separated link</a></li>
                                                            </ul>
                                                        </div>
                                                        <!-- /btn-group -->
                                                        <input type="text" class=" medium">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </form>
                                <!--</form>-->
                                <div class="space20"></div>
                                <!-- END FORM-->

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span6">
                    <!-- BEGIN widget-->
                    <div class="widget purple">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Color Pickers</h4>
                                    <span class="tools">
                                       <a class="icon-chevron-down" href="javascript:;"></a>
                                       <a class="icon-remove" href="javascript:;"></a>
                                       </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form class="form-horizontal" action="#">
                                <div class="control-group">
                                    <label class="control-label">Default</label>

                                    <div class="controls">
                                        <input type="text" value="#8fff00" class="cp1">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">RGBA</label>

                                    <div class="controls">
                                        <input type="text" data-color-format="rgba" value="rgb(0,194,255,0.78)" class="cp2">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">As Component</label>

                                    <div class="controls">
                                        <div data-color-format="rgba" data-color="#87BB33" class="input-append color cp1">
                                            <input type="text" readonly="" value="#87BB33" class="">
                                            <span class="add-on"><i style="background-color: #87BB33;"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                    <!-- BEGIN widget-->
                    <div class="widget red">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Time Pickers</h4>
                                   <span class="tools">
                                       <a class="icon-chevron-down" href="javascript:;"></a>
                                       <a class="icon-remove" href="javascript:;"></a>
                                       </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form class="form-horizontal" action="#">
                                <div class="control-group">
                                    <label class="control-label">Default Timepicker</label>

                                    <div class="controls">
                                        <div class="input-append bootstrap-timepicker">
                                            <input id="timepicker1" type="text" class="input-small">
                                            <span class="add-on"><i class="icon-time"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">24hr Timepicker</label>

                                    <div class="controls">
                                        <div class="input-append bootstrap-timepicker">
                                            <input id="timepicker2" type="text" class="input-small">
                                            <span class="add-on"> <i class="icon-time"></i></span>
                                        </div>
                                    </div>
                                </div>

                                <div id="myModal1" class="modal hide fade">
                                    <div class="modal-header">
                                        <h3>Timepicker inside a modal</h3>
                                    </div>
                                    <div class="modal-body" style="min-height: 230px">
                                        <div class="control-group">
                                            <label class="control-label">Default Timepicker</label>

                                            <div class="controls">
                                                <div class="bootstrap-timepicker">
                                                    <input id="timepicker3" type="text" value="10:35 AM" class="input-small">
                                                    <i class="icon-time"
                                                       style="margin: -2px 0 0 -22.5px; pointer-events: none;position: relative;"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="space10"></div>

                                        <div class="control-group">
                                            <label class="control-label">24hr Timepicker</label>

                                            <div class="controls">
                                                <div class="input-append bootstrap-timepicker">
                                                    <input id="timepicker4" type="text" class="input-small">
                                                    <span class="add-on"> <i class="icon-time"></i></span>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <a data-dismiss="modal" class="btn btn-primary" href="#">OK</a>
                                    </div>
                                </div>
                                <a class="btn btn-primary" href="#myModal1" data-toggle="modal">Timepicker inside a modal</a>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                    <!-- BEGIN widget-->
                    <div class="widget blue">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>
                                Clockface Time Pickers
                            </h4>
                                   <span class="tools">
                                       <a class="icon-chevron-down" href="javascript:;"></a>
                                       <a class="icon-remove" href="javascript:;"></a>
                                   </span>
                        </div>
                        <div class="widget-body form">
                            <form class="form-horizontal" action="#">
                                <div class="control-group">
                                    <label class="control-label">Input</label>

                                    <div class="controls">
                                        <input type="text" class=" small" data-format="hh:mm A" value="4:18 PM"
                                               id="clockface_1">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Button</label>

                                    <div class="controls">
                                        <div class="input-append">
                                            <input type="text" readonly="" class=" small" value="12:10" id="clockface_2">
                                            <button id="clockface_2_toggle-btn" type="button" class="btn">
                                                <i class="icon-time"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                    <!-- END widget-->
                    <!-- BEGIN widget-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Date Pickers</h4>
                                   <span class="tools">
                                       <a class="icon-chevron-down" href="javascript:;"></a>
                                       <a class="icon-remove" href="javascript:;"></a>
                                       </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form class="form-horizontal" action="#">
                                <div class="control-group">
                                    <label class="control-label">Default datepicker</label>

                                    <div class="controls">
                                        <input id="dp1" type="text" value="12-02-2012" size="16" class="m-ctrl-medium">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Starts with years view</label>

                                    <div class="controls">
                                        <div class="input-append date" id="dpYears" data-date="12-02-2012"
                                             data-date-format="dd-mm-yyyy" data-date-viewmode="years">
                                            <input class="m-ctrl-medium" size="16" type="text" value="12-02-2012" readonly>
                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Limit the view months</label>

                                    <div class="controls">
                                        <div class="input-append date" id="dpMonths" data-date="102/2012"
                                             data-date-format="mm/yyyy" data-date-viewmode="years"
                                             data-date-minviewmode="months">
                                            <input class="m-ctrl-medium" size="16" type="text" value="02/2012" readonly>
                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                    <!-- BEGIN widget-->

                    <div class="widget">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> Date Range Pickers</h4>
                                <span class="tools">
                                   <a href="javascript:;" class="icon-chevron-down"></a>
                                   <a href="javascript:;" class="icon-remove"></a>
                                   </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">Default Date Ranges</label>
                                    <div class="controls">
                                        <div class="input-prepend">
                                            <span class="add-on"><i class="icon-calendar"></i></span>
                                            <input id="reservation" type="text" class=" m-ctrl-medium" />
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Advance Date Ranges</label>
                                    <div class="controls">
                                        <div id="reportrange" class="btn">
                                            <i class="icon-calendar"></i>
                                            &nbsp;<span></span>
                                            <b class="caret"></b>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!--End Widget-->

                </div>
                <div class="span6">
                    <!-- BEGIN widget-->
                    <div class="widget green">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i>
                                Switch Buttons
                            </h4>
                                <span class="tools">
                                   <a class="icon-chevron-down" href="javascript:;"></a>
                                   <a class="icon-remove" href="javascript:;"></a>
                                   </span>
                        </div>
                        <div class="widget-body form switch-form">
                            <div class="widget-body form">
                                <!-- BEGIN FORM-->
                                <form class="form-horizontal" action="#">

                                    <div class="control-group">
                                        <label class="control-label">Basic Toggle Button</label>
                                        <div class="controls">
                                            <div id="normal-toggle-button">
                                                <input type="checkbox" checked="checked">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Toggle Buttons with Text</label>
                                        <div class="controls">
                                            <div id="text-toggle-button">
                                                <input type="checkbox">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Not Animated</label>
                                        <div class="controls">
                                            <div id="not-animated-toggle-button">
                                                <input type="checkbox" checked="checked">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Transition Speed</label>
                                        <div class="controls">
                                            <div id="transition-percent-toggle-button">
                                                <input type="checkbox" checked="checked">
                                            </div>

                                            <div id="transition-value-toggle-button">
                                                <input type="checkbox">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Styled Toggle Button</label>
                                        <div class="controls">
                                            <div id="danger-toggle-button">
                                                <input type="checkbox" checked="checked">
                                            </div>
                                            <div id="info-toggle-button">
                                                <input type="checkbox" class="toggle" checked="checked" />
                                            </div>
                                            <div id="success-toggle-button">
                                                <input type="checkbox" class="toggle" checked="checked" />
                                            </div>
                                            <div id="warning-toggle-button">
                                                <input type="checkbox" class="toggle" checked="checked" />
                                            </div>
                                        </div>

                                    </div>
                                    <div class="control-group">
                                        <label class="control-label">Height Toggle Button</label>
                                        <div class="controls">
                                            <div id="height-text-style-toggle-button">
                                                <input type="checkbox" checked="checked">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <!--</form>-->
                                <div class="space20"></div>
                                <!-- END FORM-->
                            </div>
                        </div>
                    </div>
                    <!-- END widget-->
                    <!-- BEGIN widget-->
                    <div class="widget purple">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> File Upload</h4>
                                <span class="tools">
                                   <a class="icon-chevron-down" href="javascript:;"></a>
                                   <a class="icon-remove" href="javascript:;"></a>
                                   </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form class="form-horizontal" action="#">
                                <div class="control-group">
                                    <label class="control-label">Default</label>
                                    <div class="controls">
                                        <input type="file" class="default">
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Advanced</label>
                                    <div class="controls">
                                        <div data-provides="fileupload" class="fileupload fileupload-new">
                                            <div class="input-append">
                                                <div class="uneditable-input">
                                                    <i class="icon-file fileupload-exists"></i>
                                                    <span class="fileupload-preview"></span>
                                                </div>
                                               <span class="btn btn-file">
                                               <span class="fileupload-new">Select file</span>
                                               <span class="fileupload-exists">Change</span>
                                               <input type="file" class="default">
                                               </span>
                                                <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Without input</label>
                                    <div class="controls">
                                        <div data-provides="fileupload" class="fileupload fileupload-new">
                                            <span class="btn btn-file">
                                            <span class="fileupload-new">Select file</span>
                                            <span class="fileupload-exists">Change</span>
                                            <input type="file" class="default">
                                            </span>
                                            <span class="fileupload-preview"></span>
                                            <a style="float: none" data-dismiss="fileupload" class="close fileupload-exists" href="#">×</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Image Upload</label>
                                    <div class="controls">
                                        <div data-provides="fileupload" class="fileupload fileupload-new">
                                            <div style="width: 200px; height: 150px;" class="fileupload-new thumbnail">
                                                <img alt="" src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image">
                                            </div>
                                            <div style="max-width: 200px; max-height: 150px; line-height: 20px;" class="fileupload-preview fileupload-exists thumbnail"></div>
                                            <div>
                                               <span class="btn btn-file"><span class="fileupload-new">Select image</span>
                                               <span class="fileupload-exists">Change</span>
                                               <input type="file" class="default"></span>
                                                <a data-dismiss="fileupload" class="btn fileupload-exists" href="#">Remove</a>
                                            </div>
                                        </div>
                                        <span class="label label-important">NOTE!</span>
                                         <span>
                                         Attached image thumbnail is
                                         supported in Latest Firefox, Chrome, Opera,
                                         Safari and Internet Explorer 10 only
                                         </span>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END widget-->
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN  widget-->
                    <div class="widget yellow">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> CKEditor</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                           </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">CKEditor</label>
                                    <div class="controls">
                                        <textarea class="span12 ckeditor" name="editor1" rows="6"></textarea>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXTRAS widget-->
                </div>
            </div>

            <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN  widget-->
                    <div class="widget red">
                        <div class="widget-title">
                            <h4><i class="icon-reorder"></i> WYSIWYG Editor</h4>
                        <span class="tools">
                           <a href="javascript:;" class="icon-chevron-down"></a>
                           <a href="javascript:;" class="icon-remove"></a>
                        </span>
                        </div>
                        <div class="widget-body form">
                            <!-- BEGIN FORM-->
                            <form action="#" class="form-horizontal">
                                <div class="control-group">
                                    <label class="control-label">WYSIWYG Editor</label>
                                    <div class="controls">
                                        <textarea class="span12 wysihtmleditor5" rows="5"></textarea>
                                    </div>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END EXTRAS widget-->
                </div>
            </div>

         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->
</div>

   <!-- BEGIN FOOTER -->
   <div id="footer">
       2013 &copy; Metro Lab Dashboard.
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->

   <script src="js/jquery-1.8.2.min.js"></script>
   <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
   <script type="text/javascript" src="assets/ckeditor/ckeditor.js"></script>
   <script src="assets/bootstrap/js/bootstrap.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap/js/bootstrap-fileupload.js"></script>
   <script src="js/jquery.blockui.js"></script>

   <script src="../../code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
   <script src="js/jQuery.dualListBox-1.3.js" language="javascript" type="text/javascript"></script>


   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="js/excanvas.js"></script>
   <script src="js/respond.js"></script>
   <![endif]-->
   <script type="text/javascript" src="assets/bootstrap-toggle-buttons/static/js/jquery.toggle.buttons.js"></script>
   <script type="text/javascript" src="assets/chosen-bootstrap/chosen/chosen.jquery.min.js"></script>
   <script type="text/javascript" src="assets/uniform/jquery.uniform.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/wysihtml5-0.3.0.js"></script>
   <script type="text/javascript" src="assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
   <script type="text/javascript" src="assets/clockface/js/clockface.js"></script>
   <script type="text/javascript" src="assets/jquery-tags-input/jquery.tagsinput.min.js"></script>
   <script type="text/javascript" src="assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/date.js"></script>
   <script type="text/javascript" src="assets/bootstrap-daterangepicker/daterangepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
   <script type="text/javascript" src="assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
   <script src="assets/fancybox/source/jquery.fancybox.pack.js"></script>
   <script src="js/jquery.scrollTo.min.js"></script>



   <!--common script for all pages-->
   <script src="js/common-scripts.js"></script>

   <!--script for this page-->
   <script src="js/form-component.js"></script>
  <!-- END JAVASCRIPTS -->

   <script language="javascript" type="text/javascript">

       $(function() {

           $.configureBoxes();

       });

   </script>


</body>
<!-- END BODY -->

<!-- Mirrored from thevectorlab.net/metrolab/form_component.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 26 Sep 2016 15:03:07 GMT -->
</html>