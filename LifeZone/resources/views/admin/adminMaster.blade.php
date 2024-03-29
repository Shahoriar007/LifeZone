<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <meta name="description" content="POS - Bootstrap Admin Template">
    <meta name="keywords"
        content="admin, estimates, bootstrap, business, corporate, creative, invoice, html5, responsive, Projects">
    <meta name="author" content="Dreamguys - Bootstrap Admin Template">
    <meta name="robots" content="noindex, nofollow">
    <title>LifeZone Admin</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontendAdmin/assets/img/favicon.png') }}">

    <!-- <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/css/bootstrap.min.css') }}"> -->

     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/css/bootstrap-datetimepicker.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/css/animate.css') }}">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/plugins/select2/css/select2.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/css/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/plugins/fontawesome/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontendAdmin/assets/css/style.css') }}">
    <!--new add-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontendAdmin/assets/css/jquery.dataTables.css') }}">

    @yield('contentList_Style')

</head>

<body>
    <!-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> -->

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo logo-normal">
                    <img src="{{ asset('frontendAdmin/assets/img/logo.png') }}" alt="">
                </a>
                <a href="index.html" class="logo logo-white">
                    <img src="{{ asset('frontendAdmin/assets/img/logo-white.png') }}" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="{{ asset('frontendAdmin/assets/img/logo-small.png') }}" alt="">
                </a>
                <a id="toggle_btn" href="javascript:void(0);">
                </a>
            </div>

            <a id="mobile_btn" class="mobile_btn" href="#sidebar">
                <span class="bar-icon">
                    <span></span>
                    <span></span>
                    <span></span>
                </span>
            </a>

            <ul class="nav user-menu">

                <li class="nav-item">
                    <div class="top-nav-search">
                        <a href="javascript:void(0);" class="responsive-search">
                            <i class="fa fa-search"></i>
                        </a>

                    </div>
                </li>





                <li class="nav-item dropdown">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link" data-bs-toggle="dropdown">
                        <img src="{{ asset('frontendAdmin/assets/img/icons/notification-bing.svg') }}" alt="img"> <span
                            class="badge rounded-pill">4</span>
                    </a>
                    <div class="dropdown-menu notifications">
                        <div class="topnav-dropdown-header">
                            <span class="notification-title">Notifications</span>
                            <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                        </div>
                        <div class="noti-content">
                            <ul class="notification-list">
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('frontendAdmin/assets/img/profiles/avatar-02.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">John Doe</span> added
                                                    new task <span class="noti-title">Patient appointment booking</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">4 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('frontendAdmin/assets/img/profiles/avatar-03.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Tarah Shropshire</span>
                                                    changed the task name <span class="noti-title">Appointment booking
                                                        with payment gateway</span></p>
                                                <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('frontendAdmin/assets/img/profiles/avatar-06.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Misty Tison</span>
                                                    added <span class="noti-title">Domenic Houston</span> and <span
                                                        class="noti-title">Claire Mapes</span> to project <span
                                                        class="noti-title">Doctor available module</span></p>
                                                <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('frontendAdmin/assets/img/profiles/avatar-17.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Rolland Webber</span>
                                                    completed task <span class="noti-title">Patient and Doctor video
                                                        conferencing</span></p>
                                                <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li class="notification-message">
                                    <a href="activities.html">
                                        <div class="media d-flex">
                                            <span class="avatar flex-shrink-0">
                                                <img alt="" src="{{ asset('frontendAdmin/assets/img/profiles/avatar-13.jpg') }}">
                                            </span>
                                            <div class="media-body flex-grow-1">
                                                <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span>
                                                    added new task <span class="noti-title">Private chat module</span>
                                                </p>
                                                <p class="noti-time"><span class="notification-time">2 days ago</span>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="topnav-dropdown-footer">
                            <a href="activities.html">View all Notifications</a>
                        </div>
                    </div>
                </li>

                <li class="nav-item dropdown has-arrow main-drop">
                    <a href="javascript:void(0);" class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown">
                        <span class="user-img"><img src="{{ asset('frontendAdmin/assets/img/profiles/avator1.jpg') }}" alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="{{ asset('frontendAdmin/assets/img/profiles/avator1.jpg') }}" alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>{{ auth()->user()->name }}</h6>

                                    @if(auth()->user()->is_admin)
                                    <h5>Admin</h5>
                                    @endif
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My
                                Profile</a>
                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                                    data-feather="settings"></i>Settings</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0" href="{{ route('logout') }}"
                            src="{{ asset('frontendAdmin/assets/img/icons/log-out.svg') }}" class="me-2" alt="img"

                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Log Out') }}
                        </a>

                        <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                            @csrf
                        </form>
                        </div>
                    </div>
                </li>
            </ul>


            <div class="dropdown mobile-user-menu">
                <a href="javascript:void(0);" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="generalsettings.html">Settings</a>
                    <a class="dropdown-item" href="signin.html">Logout</a>
                </div>
            </div>

        </div>


        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="{{ route('dashboard') }}"><img src="{{ asset('frontendAdmin/assets/img/icons/dashboard.svg') }}" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>

                        @if(auth()->user()->is_admin)

                        <li class="submenu">
                            <a href=""><img src="{{ asset('frontendAdmin/assets/img/icons/time.svg') }}" alt="img"><span>
                                    Courses Category</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('course_category') }}">Cagtegory List</a></li>

                            </ul>
                        </li>

                        <li class="submenu">
                            <a href=""><img src="{{ asset('frontendAdmin/assets/img/icons/time.svg') }}" alt="img"><span>
                                    Courses</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('courses-list') }}">Courses List</a></li>

                            </ul>
                        </li>

                        <li class="submenu">
                            <a href=""><img src="{{ asset('frontendAdmin/assets/img/icons/time.svg') }}" alt="img"><span>
                                    Appointments</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="https://doctorappointment.aveenirit.com/admin/appointment/page">Take Appointments</a></li>

                            </ul>
                        </li>

                        @endif

                        <li class="submenu">
                            <a href=""><img src="{{ asset('frontendAdmin/assets/img/icons/time.svg') }}" alt="img"><span>
                                    My courses</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('course_category') }}">Courses List</a></li>

                            </ul>
                        </li>

                    </ul>
                </div>
            </div>
        </div>


       <!-- Category List -->
       @yield('courseCategoryList')
       <!-- Add Category -->
       @yield('addCourseCategory')
       <!-- Course List -->
       @yield('courseList')
       <!-- Add Course -->
       @yield('addCourse')
       <!-- Course Content List -->
       @yield('courseContentList')
        <!-- Course Content Summary -->
       @yield('addCourseContentSummary')
       <!-- Course Content -->
       @yield('addCourseContent')

    </div>


    <script src="{{ asset('frontendAdmin/assets/js/jquery-3.6.0.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/feather.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/jquery.slimscroll.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('frontendAdmin/assets/js/dataTables.bootstrap4.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/moment.min.js') }}"></script>
    <script src="{{ asset('frontendAdmin/assets/js/bootstrap-datetimepicker.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/plugins/select2/js/select2.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/plugins/sweetalert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('frontendAdmin/assets/plugins/sweetalert/sweetalerts.min.js') }}"></script>

    <script src="{{ asset('frontendAdmin/assets/js/script.js') }}"></script>
     <!--new add-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>

    <!-- CK editor -->
    <script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>

    @yield('ck-editor')


</body>

</html>
