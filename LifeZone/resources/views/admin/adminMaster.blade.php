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

    <link rel="shortcut icon" type="image/x-icon" href="frontendAdmin/assets/img/favicon.png">

    <link rel="stylesheet" href="frontendAdmin/assets/css/bootstrap.min.css">

    <link rel="stylesheet" href="frontendAdmin/assets/css/bootstrap-datetimepicker.min.css">

    <link rel="stylesheet" href="frontendAdmin/assets/css/animate.css">

    <link rel="stylesheet" href="frontendAdmin/assets/plugins/select2/css/select2.min.css">

    <link rel="stylesheet" href="frontendAdmin/assets/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="frontendAdmin/assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="frontendAdmin/assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="frontendAdmin/assets/css/style.css">
    <!--new add-->
    <link rel="stylesheet" type="text/css" href="frontendAdmin/assets/css/jquery.dataTables.css">

</head>

<body>
    <!-- <div id="global-loader">
        <div class="whirly-loader"> </div>
    </div> -->

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left active">
                <a href="index.html" class="logo logo-normal">
                    <img src="frontendAdmin/assets/img/logo.png" alt="">
                </a>
                <a href="index.html" class="logo logo-white">
                    <img src="frontendAdmin/assets/img/logo-white.png" alt="">
                </a>
                <a href="index.html" class="logo-small">
                    <img src="frontendAdmin/assets/img/logo-small.png" alt="">
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
                        <img src="frontendAdmin/assets/img/icons/notification-bing.svg" alt="img"> <span
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
                                                <img alt="" src="frontendAdmin/assets/img/profiles/avatar-02.jpg">
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
                                                <img alt="" src="frontendAdmin/assets/img/profiles/avatar-03.jpg">
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
                                                <img alt="" src="frontendAdmin/assets/img/profiles/avatar-06.jpg">
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
                                                <img alt="" src="frontendAdmin/assets/img/profiles/avatar-17.jpg">
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
                                                <img alt="" src="frontendAdmin/assets/img/profiles/avatar-13.jpg">
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
                        <span class="user-img"><img src="frontendAdmin/assets/img/profiles/avator1.jpg" alt="">
                            <span class="status online"></span></span>
                    </a>
                    <div class="dropdown-menu menu-drop-user">
                        <div class="profilename">
                            <div class="profileset">
                                <span class="user-img"><img src="frontendAdmin/assets/img/profiles/avator1.jpg" alt="">
                                    <span class="status online"></span></span>
                                <div class="profilesets">
                                    <h6>John Doe</h6>
                                    <h5>Admin</h5>
                                </div>
                            </div>
                            <hr class="m-0">
                            <a class="dropdown-item" href="profile.html"> <i class="me-2" data-feather="user"></i> My
                                Profile</a>
                            <a class="dropdown-item" href="generalsettings.html"><i class="me-2"
                                    data-feather="settings"></i>Settings</a>
                            <hr class="m-0">
                            <a class="dropdown-item logout pb-0" href="signin.html"><img
                                    src="frontendAdmin/assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
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
                            <a href="index.html"><img src="frontendAdmin/assets/img/icons/dashboard.svg" alt="img"><span>
                                    Dashboard</span> </a>
                        </li>

                        <li class="submenu">
                            <a href=""><img src="frontendAdmin/assets/img/icons/time.svg" alt="img"><span>
                                    Courses Category</span> <span class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="{{ route('course_category') }}">Cagtegory List</a></li>
                               
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


    </div>

    
    <script src="frontendAdmin/assets/js/jquery-3.6.0.min.js"></script>

    <script src="frontendAdmin/assets/js/feather.min.js"></script>

    <script src="frontendAdmin/assets/js/jquery.slimscroll.min.js"></script>

    <script src="frontendAdmin/assets/js/jquery.dataTables.min.js"></script>
    <script src="frontendAdmin/assets/js/dataTables.bootstrap4.min.js"></script>

    <script src="frontendAdmin/assets/js/bootstrap.bundle.min.js"></script>

    <script src="frontendAdmin/assets/js/moment.min.js"></script>
    <script src="frontendAdmin/assets/js/bootstrap-datetimepicker.min.js"></script>

    <script src="frontendAdmin/assets/plugins/select2/js/select2.min.js"></script>

    <script src="frontendAdmin/assets/plugins/sweetalert/sweetalert2.all.min.js"></script>
    <script src="frontendAdmin/assets/plugins/sweetalert/sweetalerts.min.js"></script>

    <script src="frontendAdmin/assets/js/script.js"></script>
     <!--new add-->
    <script type="text/javascript" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js"></script>
     
    <script>
        document.addEventListener("DOMContentLoaded", function() {
      // Add a text input to each header cell for columns with indices 0, 2, and 3
      var table = document.querySelector("#example");
      var headerRow = table.querySelector("thead tr");
      var filterRow = headerRow.cloneNode(true);
      filterRow.classList.add("filters");
      headerRow.after(filterRow);
    
      var dataTable = new DataTable("#example", {
        orderCellsTop: true,
        fixedHeader: true,
        initComplete: function() {
          var api = this.api();
    
          // For each column with indices 0, 2, and 3
          api.columns([1, 2, 3,4,5,6,7,8]).eq(0).each(function(colIdx) {
            // Set the header cell to contain the input element
            var cell = filterRow.querySelectorAll("th")[colIdx];
            var title = cell.textContent;
            cell.innerHTML = '<input type="text" placeholder="' + title + '" />';
    
            // On every keypress in this input
            var input = cell.querySelector("input");
            input.addEventListener("change", function(e) {
              // Get the search value
              var value = this.value;
              this.setAttribute("title", value);
              var regexr = "({search})";
              var searchValue = value != "" ? regexr.replace("{search}", "(((" + value + ")))") : "";
    
              // Search the column for that value
              api.column(colIdx).search(searchValue, true, false).draw();
            });
    
            input.addEventListener("keyup", function(e) {
              e.stopPropagation();
              input.dispatchEvent(new Event("change"));
              input.setSelectionRange(cursorPosition, cursorPosition);
            });
          });
          
          // Hide the header cells for columns other than 0, 2, and 3
          var headerCells = filterRow.querySelectorAll("th");
          for (var i = 0; i < headerCells.length; i++) {
            if (![1, 2, 3,4,5,6,7,8].includes(i)) {
              headerCells[i].innerHTML = "<th></th>";
            }
          }
        }
      });
    });
    
       </script>
</body>

</html>