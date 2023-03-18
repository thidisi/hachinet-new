<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Hachinet Admin Control Panel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content='width=device-width, initial-scale=1.0, shrink-to-fit=no' name='viewport' />
    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}" type="image/x-icon" />

    <!-- CSS Files -->
    <link rel="stylesheet" href="{{ asset('admin_asset/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin_asset/css/atlantis.min.css') }}">

    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link rel="stylesheet" href="{{ asset('admin_asset/css/demo.css') }}">
    <style>
        .navbar .navbar-nav .nav-item .nav-link {
            color: #fff;
        }
        .navbar .navbar-nav .nav-item .nav-link:hover {
            background: #909090 !important;
        }
    </style>
    @stack('css')
</head>

<body>
    <div class="wrapper">
        @include('admin.layout.header')
        <!-- Sidebar -->
        @include('admin.layout.sidebar')
        <!-- End Sidebar -->

        <div class="main-panel">
            <div class="content">
                @yield('content')
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul class="nav">
                            <li class="nav-item">
                                <a class="nav-link" href="https://www.hachinet.com">
                                    Hachinet
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Help
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright ml-auto">
                        2023, made with <i class="fa fa-heart heart text-danger"></i> by <a
                            href="https://hachinet.com">Hachinet</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('admin_asset/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/core/bootstrap.min.js') }}"></script>
    <!-- Fonts and icons -->
    <script src="{{ asset('admin_asset/js/plugin/webfont/webfont.min.js') }}"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Lato:300,400,700,900"]
            },
            custom: {
                "families": ["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands",
                    "simple-line-icons"
                ],
                urls: ['{{ asset('admin_asset/css/fonts.min.css') }}']
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!-- jQuery UI -->
    <script src="{{ asset('admin_asset/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>

    <!-- jQuery Scrollbar -->
    <script src="{{ asset('admin_asset/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>

    <!-- jQuery Sparkline -->
    <script src="{{ asset('admin_asset/js/plugin/jquery.sparkline/jquery.sparkline.min.js') }}"></script>

    <!-- Chart Circle -->
    <script src="{{ asset('admin_asset/js/plugin/chart-circle/circles.min.js') }}"></script>

    <!-- Datatables -->
    <script src="{{ asset('admin_asset/js/plugin/datatables/datatables.min.js') }}"></script>

    <!-- Bootstrap Notify -->
    <script src="{{ asset('admin_asset/js/plugin/bootstrap-notify/bootstrap-notify.min.js') }}"></script>

    <!-- jQuery Vector Maps -->
    <script src="{{ asset('admin_asset/js/plugin/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('admin_asset/js/plugin/jqvmap/maps/jquery.vmap.world.js') }}"></script>

    <!-- Sweet Alert -->
    <script src="{{ asset('admin_asset/js/plugin/sweetalert/sweetalert.min.js') }}"></script>

    <!-- Atlantis JS -->
    <script src="{{ asset('admin_asset/js/atlantis.min.js') }}"></script>

    @stack('js')
</body>

</html>
