<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        @yield('title')
    </title>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">


    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap5.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/footstyle.css')}}">

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
{{--<div class="min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @if (isset($header))
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endif
</div>--}}
{{--@include('layouts.inc.frontnavbar')
<div class="wrapper">
<div class="content">
    @yield('content')
</div>

@include('layouts.inc.frontendfooter')
</div>--}}

{{--<div class="main-panel">--}}
{{--    @include('layouts.inc.frontnavbar')--}}

{{--    <div class="content">--}}
{{--        @yield('content')--}}
{{--    </div>--}}
    @include('layouts.inc.frontendfooter')
{{--</div>--}}
{{--</div>--}}
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}" ></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

{{--@if(session('status'))--}}
{{--    <script>--}}
{{--        swal("{{session('status')}}");--}}
{{--    </script>--}}
{{--@endif--}}
@yield('scripts')
</body>
</html>
