<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title>@yield('title')</title>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    {{-- <!-- <link href='{{ asset('assets/css/boxicons.min.css') }}' rel='stylesheet'> --> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
</head>

<body id="body-pd" class="bg-light">
    {{-- Navbar --}}
    @include('layouts.navbar')
    {{-- Endnavbar --}}

    {{-- Sidebar --}}
    @include('layouts.sidebar')
    {{-- Endsidebar --}}
    <!--Container Main start-->
    <div class="p-2">
        <main class="container-fluid">
            @yield('content') </main>

    </div>
    @include('layouts.footer')
    <!--Container Main end-->
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js'>
    </script>
    {{-- <!-- <script type='text/javascript' src='{{ asset('assets/js/bootstrap.bundle.min.js') }}'></script> --> --}}
    <script type='text/javascript' src="{{ asset('assets/js/dashboard.js') }}">
    </script>
    {{-- Custom Script --}}
    @stack('script')
</body>

</html>
