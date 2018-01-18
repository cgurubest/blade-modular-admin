<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> ModularAdmin - Free Dashboard Theme | HTML Version </title>
    @yield('meta')
    <link rel="apple-touch-icon" href="{{asset('modular/apple-touch-icon.png')}}">
    <!-- Place favicon.ico in the root directory -->
    <!-- Place favicon.ico in the root directory -->
    <link rel="stylesheet" href="{{asset('modular/css/vendor.css')}}">
    <link rel="stylesheet" id="theme-style" href="{{asset('modular/css/app.css')}}">

</head>
<body>
<div class="main-wrapper">
    <div class="app" id="app">
        <header class="header">
            @include('modular.header')
        </header>

        <aside class="sidebar">
            @include('modular.sidebar')
        </aside>

        <div class="sidebar-overlay" id="sidebar-overlay"></div>
        <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
        <div class="mobile-menu-handle"></div>

        @yield('content-page')

        <footer class="footer">
            @include('modular.footer')
        </footer>

        <div id="dashboard_modal">
            @include('modular.modals')
        </div>

    </div>
</div>
<!-- Reference block for JS -->
<div class="ref" id="ref">
    <div class="color-primary"></div>
    <div class="chart">
        <div class="color-primary"></div>
        <div class="color-secondary"></div>
    </div>
</div>

<script src="{{asset('modular/js/vendor.js')}}"></script>
<script src="{{asset('modular/js/app.js')}}"></script>

</body>
</html>