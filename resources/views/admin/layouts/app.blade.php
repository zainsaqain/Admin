<!doctype html>
<html lang="en">
<!-- Mirrored from codebucks.in/clivax/layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2024 11:41:23 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Dashboard | Clivax - Admin & Dashboard Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="Codebucks" name="author" />
    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('admin-assets/images/favicon.ico')}}">
    <!-- dark layout js -->
    <script src="{{asset('admin-assets/js/pages/layout.js')}}"></script>
    <!-- Bootstrap Css -->
    <link href="{{asset('admin-assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="{{asset('admin-assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
    <!-- simplebar css -->
    <link href="{{asset('admin-assets/libs/simplebar/simplebar.min.css')}}" rel="stylesheet">
    <!-- App Css-->
    <link href="{{asset('admin-assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="layout-wrapper">
    @include('admin.layouts.topbar')
    @include('admin.layouts.left-sidebar')
    <div class="main-content">
        @yield('content')
       @include('admin.layouts.footer')
    </div>
</div>

@include('admin.layouts.right-sidebar')

<!-- JAVASCRIPT -->
<script src="{{asset('admin-assets/libs/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin-assets/libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

<script src="{{asset('admin-assets/libs/metismenu/metisMenu.min.js')}}"></script>
<script src="{{asset('admin-assets/libs/simplebar/simplebar.min.js')}}"></script>
<script src="{{asset('admin-assets/libs/node-waves/waves.min.js')}}"></script>


<!-- apexcharts -->
<script src="{{asset('admin-assets/libs/apexcharts/apexcharts.min.js')}}"></script>

<script src="{{asset('admin-assets/js/pages/dashboard.init.js')}}"></script>

<!-- App js -->
<script src="{{asset('admin-assets/js/app.js')}}"></script>
</body>
<!-- Mirrored from codebucks.in/clivax/layout/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 22 Aug 2024 11:41:53 GMT -->
</html>
