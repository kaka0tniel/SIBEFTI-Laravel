<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sekretaris Dashboad </title>
    <!-- Core CSS - Include with every page -->
    <link href="admin/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="admin/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="admin/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="admin/css/style.css" rel="stylesheet" />
    <link href="admin/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="admin/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
            <!-- end navbar-header -->
            <!-- navbar-top-links -->
            <ul class="nav navbar-top-links navbar-right">
                <!-- main dropdown -->

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-3x"></i>
                    </a>
                    <!-- dropdown user-->
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                    <!-- end dropdown-user -->
                </li>
                <!-- end main dropdown -->
            </ul>
            <!-- end navbar-top-links -->

        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">

                            </div>
                            <div class="user-info">
                                <div><strong>Sekretaris</strong></div>
                                <div class="user-text-online">
                                    <span class="user-circle-online btn btn-success btn-circle "></span>&nbsp;Online
                                </div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>

                    <ul class="selected">Sekretaris Dashboard
                        <li><a href="sekretaris"><i class="fa fa-user fa-fw"></i>Pengumuman</a>
                        </li>
                        <li><a href="event"><i class="fa fa-gear fa-fw"></i>Event</a>
                        </li>
                    </ul>

                    <!-- <li class="selected">
                        <a href="sekretaris"><i class="fa fa-dashboard fa-fw"></i>Sekretaris Dashboard</a>
                    </li> -->

                     <li>
                        <a href="pengumuman"><i class="fa fa-edit fa-fw"></i>Create New Pengumuman</a>
                    </li>

                    <li>
                        <a href="tables.html"><i class="fa fa-sitemap fa-fw"></i>Daftar Aspirasi Mahasiswa</a>
                    </li>

                    <li>
                        <a href="event"><i class="fa fa-files-o fa-fw"></i>Create New Event</span></a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
        <!--  page-wrapper -->
        <div id="page-wrapper">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Sekretaris Dashboard</h1>
                </div>
                @yield('content');
                <!--End Page Header -->
            </div>

        </div>
        <!-- end page-wrapper -->

    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="admin/plugins/jquery-1.10.2.js"></script>
    <script src="admin/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="admin/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="admin/plugins/pace/pace.js"></script>
    <script src="admin/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="admin/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="admin/plugins/morris/morris.js"></script>
    <script src="admin/scripts/dashboard-demo.js"></script>

</body>

</html>
