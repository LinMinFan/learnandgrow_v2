<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="referrer" content="same-origin">
	<meta name="rating" content="general">
	<meta name="author" content="{{ $site->firstWhere('key', 'author')->value ?? config('admin_site.author') }}">
    @if (isset($content))
        <meta name="description" content="{{ $content->meta_description }}">
        <meta name="keywords" content="{{ $content->meta_keywords }}">
    @else
        <meta name="description" content="{{ $site->firstWhere('key', 'description')->value ?? config('admin_site.description') }}">
        <meta name="keywords" content="{{ $site->firstWhere('key', 'keywords')->value ?? config('admin_site.keywords') }}">
    @endif
	
    <meta name="robots" content="index,follow">
    <meta name="_token" content="{{ csrf_token() }}">
    @stack('meta')
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Title -->
    @if (isset($content))
        <title>{{ $content->title }}</title>
    @else
        <title>{{ $site->firstWhere('key', 'webname')->value ?? config('admin_site.webname') }}</title>
    @endif
    
    <!-- Favicon -->
    <link rel="icon" href="{{ asset($site->firstWhere('key', 'favicon')->value) ?? config('admin_site.favicon') }}">

    <!-- bootstrap -->
    <link href="{{ asset('css/bootstrap/bootstrap.min.css') }}" rel="stylesheet">

    <!-- font-awesome 使用 js 版本 -->
    {{-- <link href="{{ asset('css/all.min.css') }}" rel="stylesheet"> --}}

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('css/global.css') }}" rel="stylesheet">

    @stack('css')

    {{-- Google Analytics --}}
    {{ $site->firstWhere('key', 'tracking_ga')->value ?? config('admin_site.tracking_ga') }}

<body>
    <header>
        @include('site.partials.contact_header')
    </header>

    <section>
        @yield('content')
    </section>
    
    <footer class="footer-area">
        @include('site.partials.footer')
    </footer>

    <!-- jQuery -->
    <script src="{{ asset('js/jquery/jquery-3.7.1.min.js') }}"></script>

    <!-- Bootstrap js -->
    <script src="{{ asset('js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- font-awesome -->
    <script defer src="{{ asset('js/all.min.js') }}"></script>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/jquery.easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/jquery.waypoints.min.js') }}"></script>
    <script src="{{ asset('vendor/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('vendor/owl.carousel/owl.carousel.min.js') }}"></script>
  
    <!-- Template Main JS File -->
    <script defer src="{{ asset('js/global.js') }}"></script>

    @stack('js')
</body>
</html>
