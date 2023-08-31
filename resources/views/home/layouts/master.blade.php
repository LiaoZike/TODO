<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('page-title')</title>
{{--    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />--}}
    <link href="{{ asset('css/admin-styles.css') }}" rel="stylesheet" />
    <link href="{{ asset('source/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('source/css/jquery.dataTables.min.css') }}" rel="stylesheet" />
    <script src="{{asset('source/js/all.js') }}"></script>
    <script src="{{asset('source/js/jquery.min.js')}}"></script>
    <script src="{{asset('source/js/jquery.dataTables.min.js')}}"></script>
</head>
<body class="sb-nav-fixed">
    @yield('page-style')
    @include('home.layouts.shared.navbar')
    <div id="layoutSidenav">
        @include('home.layouts.shared.sidenav')
        <div id="layoutSidenav_content">
            <main>
                @yield('page-content')
            </main>
            @include('home.layouts.shared.footer')
        </div>
    </div>
    <script src="{{ asset('source/js/bootstrap.bundle.min.js') }}" crossorigin="anonymous"></script>
    <script src="{{ asset('js/admin-scripts.js') }}"></script>
</body>
</html>
