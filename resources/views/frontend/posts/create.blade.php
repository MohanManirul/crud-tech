@extends('frontend.layouts.master')
@section('per_page_meta')
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
@endsection

@section('per_page_title')
    {{ __('Create Post | Super Admin Dashboard') }}
@endsection

@push('per_page_css')
    <link href="{{ asset('backend/assets/css/select2/form-select2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/select2/select2-materialize.css') }}" rel="stylesheet">
    <link href="{{ asset('backend/assets/css/select2/select2.min.css') }}" rel="stylesheet">
@endpush


@section('body-content')
    <div class="page-content">
        <div class="container-fluid">
 
            <div class="row">
                <div class="col">

                    <div class="h-100">
                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#">{{ __('Home') }}</a></li>
                                        <li class="breadcrumb-item"><a href="#">{{ __('Post Management') }}</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('user.post.all') }}">{{ __('Post') }}</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">{{ __('Add Post') }}</li>
                                    </ol>
                                </nav>
                            </div>
                            <!--end col-->
                        </div>
                        <!--end row-->

                        <div class="row mb-3 pb-1">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">{{ __('Create Post') }}</h5>                                    
                                            <a href="{{ route('user.post.all') }}" class="btn btn-outline-dark waves-effect waves-light float-end">{{ __('All Post') }}</a>
                                    
                                    </div>
                                    <div class="card-body">

                                        <form class="ajax-form" action="{{ route('user.post.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                            @csrf
                                            <div class="row">
                                                    <!-- business type name start -->
                                                    <div class="col-md-6 col-12 mb-2 form-group ">
                                                        <label for="name" class="form-label">{{ __('Post Name') }}</label><span class="require-span">*</span>
                                                        <input type="text" name="name" class="form-control" id="name" placeholder="{{ __('Enter Post Name') }}">
                                                        
                                                    </div>                                                    
                                                    <!-- business type name ends -->

                                                    <!-- image start-->
                                                    <div class="col-md-6 col-12 mb-2 form-group uploader">
                                                        
                                                            <label for="" class="form-label">{{ __('Image') }}</label>
                                                            <div class="input-group">
                                                                <input type="file" name="image" class="file-id">
                                                            </div>
                                                        
                                                    </div>
                                                <!-- image ends-->
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <button type="submit" class="btn btn-outline-success waves-effect waves-light float-end">{{ __('Add') }}</button>
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
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

@push('per_page_js')

    <script src="{{ asset('backend/assets/js/jquery-3.6.1.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/sweetalert.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/select2/form-select2.min.js') }}"></script>
     <script src="{{ asset('backend/assets/js/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/ajax_form_submit.js') }}"></script>
    <script src="{{ asset('backend/assets/js/media-uploader.js') }}"></script>

    <script>
        $(document).ready(function domReady() {
            $(".select2").select2({
                dropdownAutoWidth: true,
                width: '100%',
            });
        });
    </script>
@endpush