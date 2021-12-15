<!doctype html>
<html lang="en" dir="ltr">

<!-- soccer/project/  07 Jan 2020 03:36:49 GMT -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>:: Blog :: @yield('title')</title>

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/bootstrap/css/bootstrap.min.css')}}" />

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/plugins/charts-c3/c3.min.css')}}" />

    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/main.css')}}" />
    <link rel="stylesheet" href="{{ asset('dashboard/assets/css/theme1.css')}}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body class="font-montserrat">
    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <div id="main_content">

        @include('admin.layouts.right-navigation')

        <div class="page">
            {{-- top navigation start --}}
            @include('admin.layouts.top-navigation')
            {{-- top navigation end --}}


            @yield('contents')

            @include('admin.layouts.footer')

        </div>
    </div>


    <script src="{{ asset('dashboard/assets/bundles/lib.vendor.bundle.js')}}"></script>

    <script src="{{ asset('dashboard/assets/bundles/apexcharts.bundle.js')}}"></script>
    <script src="{{ asset('dashboard/assets/bundles/counterup.bundle.js')}}"></script>
    <script src="{{ asset('dashboard/assets/bundles/knobjs.bundle.js')}}"></script>
    <script src="{{ asset('dashboard/assets/bundles/c3.bundle.js')}}"></script>

    <script src="{{ asset('dashboard/assets/js/core.js')}}"></script>
    <script src="{{ asset('dashboard/assets/js/page/project-index.js')}}"></script>
</body>

</html>
