<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="referrer" content="same-origin">
	<meta name="rating" content="general">
	<meta name="author" content="{{ $site->firstWhere('key', 'author')->value ?? config('admin_site.author') }}">
    <meta name="description" content="{{ $site->firstWhere('key', 'description')->value ?? config('admin_site.description') }}">
    <meta name="keywords" content="{{ $site->firstWhere('key', 'keywords')->value ?? config('admin_site.keywords') }}">
	
    <meta name="robots" content="index,follow">
    <meta name="_token" content="{{ csrf_token() }}">
    @stack('meta')
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Title -->
    <title>{{ $site->firstWhere('key', 'webname')->value ?? config('admin_site.webname') }}</title>
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset($site->firstWhere('key', 'favicon')->value) ?? config('admin_site.favicon') }}">

    <!-- bootstrap -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- plugins:css -->
    <link href="{{ asset('admin/vendors/mdi/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/css/vendor.bundle.base.css') }}" rel="stylesheet">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link href="{{ asset('admin/vendors/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/owl-carousel-2/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/vendors/owl-carousel-2/owl.theme.default.min.css') }}" rel="stylesheet">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link href="{{ asset('admin/css/style.css') }}" rel="stylesheet">
    <!-- End layout styles -->

    @stack('css')

<body class="sb-nav-fixed">
    
    <section>
        @yield('content')
    </section>
    
    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- font-awesome -->
    <script defer src="{{ asset('js/all.min.js') }}"></script>

    <!-- Plugin js for this page -->
    <script defer src="{{ asset('admin/vendors/chart.js/Chart.min.js') }}"></script>
    <script defer src="{{ asset('admin/vendors/progressbar.js/progressbar.min.js') }}"></script>
    <script defer src="{{ asset('admin/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script defer src="{{ asset('admin/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script defer src="{{ asset('admin/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script defer src="{{ asset('admin/js/off-canvas.js') }}"></script>
    <script defer src="{{ asset('admin/js/hoverable-collapse.js') }}"></script>
    <script defer src="{{ asset('admin/js/misc.js') }}"></script>
    <script defer src="{{ asset('admin/js/settings.js') }}"></script>
    <script defer src="{{ asset('admin/js/todolist.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script defer src="{{ asset('admin/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
    
    @stack('js')
</body>
</html>
