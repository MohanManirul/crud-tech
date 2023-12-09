@extends('backend.layouts.master')

@section('content')
    <div class="page-content">
        <div class="container-fluid">
            <div style="float: right">
                <a  href="#"  onclick="event.preventDefault(); document.getElementById('logout-form').submit()"><i class="mdi mdi-logout text-muted fs-16 align-middle me-1"></i> <span class="align-middle" data-key="t-logout"> <button class="btn btn-danger" >{{ __('Logout') }}</button> </span></a>
                <form action="{{ route('super_admin.logout') }}" id="logout-form" style="display: none;" method="post">@csrf</form>
            </div>
            <div class="row">
                
                <div class="col"> 

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="d-flex align-items-lg-center flex-lg-row flex-column">
                                    <div class="flex-grow-1">
                                        <p class="text-muted mb-0">Super Admin Data</p>
                                    </div>
                                    <div class="mt-3 mt-lg-0">

                                    </div>
                                </div><!-- end card header -->
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                    </div> <!-- end .h-100-->

                </div> <!-- end col -->


            </div>

        </div>
        <!-- container-fluid -->
    </div>

@endsection
