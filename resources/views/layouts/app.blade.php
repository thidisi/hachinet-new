<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index,follow,archive">
    <title>@yield('title')</title>

    <meta name="description"
        content="@yield('meta_description', 'Software is the global technology and IT services headquartered in Vietnam.')">
    <meta name="keywords"
        content="Software Outsource,System Development, Vietnam outsource,IT Outsourcing,Offshore,Offshore Vietnam">
    <meta property="og:locale" content="en_US">
    <meta property="og:title" content="@yield('meta_title', 'Software Outsourcing - Digital Transformation - Staffing Service Global')">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:description"
        content="Hachinet Software is the global Outsourcing services headquartered in Vietnam.">
    <meta property="og:site_name" content="Hachinet Software Outsourcing">
    <meta hid="og:image" name="og:image" content="@yield('meta_image', asset('assets/img/hachinet-software.png'))">
    @yield('meta')
    <!-- Favicon -->

    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="{{ url()->current() }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- Owl.Carousel.Min.CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <!-- Owl.Theme.Default.Min.CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <!-- Animate.Min.CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <!-- Font-Awesome.Min.CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
    <!-- Flaticon.CSS -->
    <link rel="stylesheet" href="{{ asset('assets/font/flaticon.css') }}">
    <!-- Magnific-Popup.Min.CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.min.css') }}">
    <!-- Style.CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css?v=1.12222339') }}">
    <!-- Responsive.CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
    @stack('css')
</head>

<body id="app-layout">
    <div id="pi-all">
        @include('layouts.header')
        <div id="page">
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
</body>
<!-- Jquery.Mim.JS -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<!-- Bootstrap.Bundle.Mim.JS -->
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<!-- Meanmenu.Mim.JS -->
<script src="{{ asset('assets/js/meanmenu.min.js') }}"></script>
<!-- Magnific.Popup.Min.JS -->
<script src="{{ asset('assets/js/magnific-popup.min.js') }}"></script>
<!-- Owl.Carousel.Min.JS -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- Wow.Min.JS -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- Mixitup.Min.JS -->
<script src="{{ asset('assets/js/mixitup.min.js') }}"></script>
<!-- Form Validator Mim JS -->
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<!-- Contact JS -->
{{-- <script src="{{ asset('assets/js/contact-form-script.js') }}"></script> --}}
<!-- Ajaxchimp Mim JS -->
<script src="{{ asset('assets/js/ajaxchimp.min.js') }}"></script>
<!-- Active JS -->
<script src="{{ asset('assets/js/active.js') }}"></script>
<div id="toTop" class="back-to-top"><i class="flaticon-chevron"></i></div>

<style type="text/css">
    .typewrite>.wrap {
        border-right: 0.08em solid #fff
    }
</style>
</body>

</html>
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-BVGJQP9HQW"></script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-BVGJQP9HQW');
</script>
@stack('js')

</html>
