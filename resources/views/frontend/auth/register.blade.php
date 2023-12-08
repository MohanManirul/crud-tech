
<!doctype html>
<html lang="en" data-layout="vertical" data-topbar="light" data-sidebar="light" data-sidebar-size="lg" data-sidebar-image="none" data-preloader="disable">

<head>

    <meta charset="utf-8" />
    <title>{{ __('Sign In | My Post') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Themesbrand" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/assets/images/favicon.ico') }}">

    <!-- Layout config Js -->
    <script src="{{ asset('frontend/assets/js/layout.js') }}"></script>
    <!-- Bootstrap Css -->
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{ asset('frontend/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="{{ asset('frontend/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- custom Css-->
    <link href="{{ asset('frontend/assets/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/loader.css') }}">
<style>
    .login-header {
    margin-bottom: 20px;
}
.login-header p {
    margin-bottom: 0;
}
.login-header h3 {
    font-size: 18px;
    margin-bottom: 3px;
}
.login-header h3 a {
    color: #ee344e;
    float: right;
    font-size: 15px;
    margin-top: 2px;
}
.login-right .dont-have {
    color: #3d3d3d;
    margin-top: 20px;
    font-size: 13px;
}
.login-right .dont-have a {
    color: #ee344e;
}
</style>
</head>

<body>

<!-- auth-page wrapper -->
<div class="auth-page-wrapper auth-bg-cover py-5 d-flex justify-content-center align-items-center min-vh-100">
    <div class="loading">Loading&#8230;</div>
    <div class="bg-overlay"></div>
    <!-- auth-page content -->
    <div class="auth-page-content overflow-hidden pt-lg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card overflow-hidden border-0">
                        <div class="row g-0">
                            <div class="col-lg-6">
                                <div class="p-lg-5 p-4 auth-one-bg h-100">
                                    <div class="bg-overlay"></div>
                                    <div class="position-relative h-100 d-flex flex-column">
                                        <div class="mb-4">
                                            <a href="" class="d-block">
                                                <img src="{{ asset('frontend/assets/images/logo-light.png') }}" alt="" height="18">
                                            </a>
                                        </div>
                                        <div class="mt-auto">
                                            <div class="mb-3">
                                                <i class="ri-double-quotes-l display-4 text-success"></i>
                                            </div>

                                            <div id="qoutescarouselIndicators" class="carousel slide" data-bs-ride="carousel">
                                                <div class="carousel-indicators">
                                                    <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                                    <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                                    <button type="button" data-bs-target="#qoutescarouselIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                                </div>
                                                <div class="carousel-inner text-center text-white pb-5">
                                                    <div class="carousel-item active">
                                                        <p class="fs-15 fst-italic">" {{ __('Great! Clean code, clean design, easy for customization. Thanks very much') }} ! "</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="fs-15 fst-italic">" {{ __('The theme is really great with an amazing customer support') }} ."</p>
                                                    </div>
                                                    <div class="carousel-item">
                                                        <p class="fs-15 fst-italic">" {{ __('Great! Clean code, clean design, easy for customization. Thanks very much') }}! "</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end carousel -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->

                            <div class="col-lg-6">
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{ session('success') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                @if(session('failed'))
                                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                        <strong>{{ session('failed') }}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                @endif
                                <div class="p-lg-5 p-4">
                                    
                                    <div class="login-header">
                                        <h3>
                                            Register<a class="forgot-link" href="{{ route('front.login') }}" >Already have an
                                                account?</a>
                                        </h3>
                                    </div>

                                    <div class="mt-4">
                                        <form action="{{ route('do.register') }}" class="ajax-form" autocomplete="off" method="post">
                                            @csrf
                                            <div class="mb-3">
                                                <label for="name" class="form-label">{{ __('Name') }}</label>
                                                <input type="name" name="name" class="form-control" id="name" placeholder="{{ __('Enter Name') }}">
                                            </div>

                                            <div class="mb-3">
                                                <label for="email" class="form-label">{{ __('Email') }}</label>
                                                <input type="email" name="email" class="form-control" id="email" placeholder="{{ __('Enter Email') }}">
                                            </div>

                                            <div class="mb-3">
                                                
                                                <label class="form-label" for="password-input">{{ __('Password') }}</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" name="password" class="form-control pe-5 password-input" placeholder="Enter password" id="password-input">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>

                                            <div class="mb-3">
                                                
                                                <label class="form-label" for="password-input">{{ __('Password Confirmation') }}</label>
                                                <div class="position-relative auth-pass-inputgroup mb-3">
                                                    <input type="password" name="password_confirmation" class="form-control pe-5 password-input" placeholder="Re-enter password" id="password-input">
                                                    <button class="btn btn-link position-absolute end-0 top-0 text-decoration-none text-muted password-addon" type="button" id="password-addon"><i class="ri-eye-fill align-middle"></i></button>
                                                </div>
                                            </div>

                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="auth-remember-check">
                                                <label class="form-check-label" for="auth-remember-check">{{ __('Remember me') }}</label>
                                            </div>

                                            <div class="mt-4">
                                                <button class="btn btn-success w-100" type="submit">{{ __('Sign In') }}</button>
                                            </div>


                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- end card -->
                </div>
                <!-- end col -->

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end auth page content -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="mb-0">&copy;
                            <script>document.write(new Date().getFullYear())</script> {{ __('Egal Shop. Crafted with') }} <i class="mdi mdi-heart text-danger"></i>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end Footer -->
</div>
<!-- end auth-page-wrapper -->

<!-- JAVASCRIPT -->
<script src="{{ asset('frontend/assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('frontend/assets/libs/simplebar/simplebar.min.js') }}"></script>
<script src="{{ asset('frontend/assets/libs/node-waves/waves.min.js') }}"></script>
<script src="{{ asset('frontend/assets/libs/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/pages/plugins/lord-icon-2.1.0.js') }}"></script>
<script src="{{ asset('frontend/assets/js/plugins.js') }}"></script>

<!-- password-addon init -->
<script src="{{ asset('frontend/assets/js/pages/password-addon.init.js') }}"></script>

<script src="{{ asset('frontend/assets/js/jquery-3.6.1.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/sweetalert.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/ajax_form_submit.js') }}"></script>

</body>

</html>
