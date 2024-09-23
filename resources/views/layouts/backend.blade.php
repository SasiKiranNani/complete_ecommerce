<!-- nav.blade.php -->
<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from themewagon.github.io/dashtreme/# by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jun 2024 11:12:27 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>
        Dashtreme Admin - Free Dashboard for Bootstrap 4 by Codervent
    </title>
    <!-- loader-->
    <link href="{{ asset('backend/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('backend/js/pace.min.js') }}"></script>
    <!--favicon-->
    <link rel="icon" href="{{ asset('backend/images/favicon.ico') }}" type="image/x-icon" />
    <!-- Vector CSS -->
    <link href="{{ asset('backend/plugins/vectormap/jquery-jvectormap-2.0.2.html') }}" rel="stylesheet" />
    <!-- simplebar CSS-->
    <link href="{{ asset('backend/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('backend/css/bootstrap.min.css') }}" rel="stylesheet" />
    <!-- animate CSS-->
    <link href="{{ asset('backend/css/animate.css') }}" rel="stylesheet" type="text/css" />
    <!-- Icons CSS-->
    <link href="{{ asset('backend/css/icons.css') }}" rel="stylesheet" type="text/css" />
    <!-- Sidebar CSS-->
    <link href="{{ asset('backend/css/sidebar-menu.css') }}" rel="stylesheet" />
    <!-- Custom Style-->
    <link href="{{ asset('backend/css/app-style.css') }}" rel="stylesheet" />
    {{-- <link href="{{ asset('backend/css/user-data-cart.css') }}" rel="stylesheet" /> --}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body class="bg-theme bg-theme1">
    <!-- Start wrapper-->
    <div id="wrapper">
        @include('backend.includes.header')
        <div class="content-wrapper">

            @yield('page-content')

        </div>
        @include('backend.includes.footer')
    </div>
    <!--End wrapper-->

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('backend/js/jquery.min.js') }}"></script>
    <script src="{{ asset('backend/js/popper.min.js') }}"></script>
    <script src="{{ asset('backend/js/bootstrap.min.js') }}"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- simplebar js -->
    <script src="{{ asset('backend/plugins/simplebar/js/simplebar.js') }}"></script>
    <!-- sidebar-menu js -->
    <script src="{{ asset('backend/js/sidebar-menu.js') }}"></script>
    <!-- loader scripts -->
    <script src="{{ asset('backend/js/jquery.loading-indicator.html') }}"></script>
    <!-- Custom scripts -->
    <script src="{{ asset('backend/js/app-script.js') }}"></script>
    <!-- Chart js -->

    <script src="{{ asset('backend/plugins/Chart.js/Chart.min.js') }}"></script>

    <!-- Index js -->
    <script src="{{ asset('backend/js/index.js') }}"></script>

    @push('scripts')
    @endpush
</body>

<!-- Mirrored from themewagon.github.io/dashtreme/# by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 24 Jun 2024 11:12:34 GMT -->

</html>
