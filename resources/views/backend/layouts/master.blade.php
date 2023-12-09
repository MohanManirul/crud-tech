
<!doctype html>
<html lang="en" data-layout="twocolumn" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none">

<head>

    <meta charset="utf-8" />
    <title>Dashboard | Post</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">
    <!--css start-->
    @include('backend.layouts._css')
    <!--css end-->

</head>

<body>

    <!-- Begin page -->
<div id="layout-wrapper">

<header id="page-topbar">
    @include('backend.layouts._topBar')
</header>
        <!-- ========== App Menu ========== -->
        <div class="app-menu navbar-menu">
            <!--left sidebar start-->
            @include('backend.layouts._leftSideBar')
            <!--left sidebar end-->
        </div>
        <!-- Left Sidebar End -->
        <!-- Vertical Overlay-->
        <div class="vertical-overlay"></div>

        <!-- ============================================================== -->
        <!-- Start right Content here -->
        <!-- ============================================================== -->
        <div class="main-content">

            @yield('content')
            <!-- End Page-content -->

            <footer class="footer">
                @include('backend.layouts._footer')
            </footer>
        </div>
        <!-- end main content-->

    </div>
    <!-- END layout-wrapper -->



    <!--start back-to-top-->
    <button onclick="topFunction()" class="btn btn-danger btn-icon" id="back-to-top">
        <i class="ri-arrow-up-line"></i>
    </button>
    <!--end back-to-top-->


  
    @include('backend.layouts._themeSetings')
    @include('backend.layouts._js')
</body>

</html>