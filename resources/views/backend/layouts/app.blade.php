<!doctype html>
<html lang="en">

    <head>

        <meta charset="utf-8" />
        <title>@yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Template" name="" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="@if(!empty(setting())) {{asset('uploads/settings/favicon')}}/{{setting()->favicon}}@endif">

        <link href="{{asset('backend/assets/libs/metrojs/release/MetroJs.Full/MetroJs.min.css')}}" rel="stylesheet" type="text/css" />

        <!-- Bootstrap Css -->
        <link href="{{asset('backend/assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('backend/assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('backend/assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

        <link rel="stylesheet" href="{{asset('backend/assets/css/styles.css')}}" type="text/css">
        {{-- Datatable --}}
        <link href="{{asset('backend/assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        {{-- Select2 --}}
        <link href="{{asset('backend/assets/libs/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="shortcut icon" href="{{ asset('backend/assets/images/logo/library-logo.png') }}" type="image/x-icon">

    </head>

    <body data-topbar="dark">

        @if(auth()->guest())
            @yield('guest')
        @else
        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('backend.layouts.partials.header')

            @include('backend.layouts.partials.sidebar')

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    @yield('content')
                </div>
            <!-- End Page-content -->
            @include('backend.layouts.partials.footer')
            </div>
            <!-- end main content-->

        </div>
        @endif
        <!-- END layout-wrapper -->
        <!-- JAVASCRIPT -->
        <script src="{{ mix('js/app.js') }}" defer></script>
        <script src="{{asset('backend/assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/node-waves/waves.min.js')}}"></script>


        <script src="{{asset('backend/assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('backend/assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>

        <script src="{{asset('backend/assets/js/pages/toasts.init.js')}}"></script>

        <script src="{{asset('backend/assets/js/app.js')}}"></script>
        <script src="{{asset('backend/assets/js/common.js')}}"></script>

        <script src="{{asset('backend/assets/libs/select2/js/select2.min.js')}}"></script>


        @stack('scripts')
    </body>
</html>
