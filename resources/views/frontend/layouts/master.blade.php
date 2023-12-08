<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>
    @yield('title', 'My-Portfolio')
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

   <!--css start-->
   @include('frontend.layouts._css') 
   <!--css end-->


  <!-- =======================================================
  * Template Name: Lonely
  * Updated: Sep 18 2023 with Bootstrap v5.3.2
  * Template URL: https://bootstrapmade.com/free-html-bootstrap-template-lonely/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body> 

  <!-- ======= Hero Section ======= -->
  {{-- @include('frontend.layouts._hero')  --}}
  <!-- End Hero --> 

      <!-- page container area start -->
      @include('frontend.layouts._header')

      <div class="content" style="transform: none; min-height: 201px;">
        <div class="container-fluid" style="transform: none;">
          <div class="row"  style="transform: none;">

            <div class="col-md-5 col-lg-4 col-xl-3 " style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
              <div style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 30px;">

                @include('frontend.layouts._leftSideBar')
              </div>
            </div>
      
            <div class="col-md-7 col-lg-8 col-xl-9">   
              <div class="row">
                <div class="col-md-12">              
                  @yield('body-content')
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        
        <!-- main content area start -->
        <!-- main content area end -->
        @include('frontend.layouts._footer')
    
    <!-- page container area end -->

  {{-- <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
   @include('frontend.layouts._header')
  </header><!-- End Header -->

  <div class="app-menu navbar-menu col-md-4">
    @include('frontend.layouts._leftSideBar')
  </div>

  <main id="main">
    @yield('body-content')
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    @include('frontend.layouts._footer')
  </footer><!-- End  Footer --> --}}

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
@include('frontend.layouts._scripts')

</body>

</html>